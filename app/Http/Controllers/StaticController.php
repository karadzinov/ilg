<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User as User;
use App\Workflow;
use Validator;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Hash;
use Input;
use App\Country as Country;
use App\StaticPage as StaticPage;

class StaticController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $staticpage = StaticPage::paginate(10);
        $data = ["staticpages" => $staticpage];
        return view('admin.staticpage')->with($data);
    }


    public function create()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        $users = User::get();
        $workflows = Workflow::get();
        $data = ["countries" => $countries, "users" => $users, "workflows" => $workflows];
        return view('admin.createstaticpage')->with($data);
    }


    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);

        $slug = StaticPage::where('title', $request['title'])->get();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/staticpage';
            $pathThumb = public_path() . '/assets/img/staticpage/thumbnails/';
            $pathMedium = public_path() . '/assets/img/staticpage/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/staticpage/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;
            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;
        }





        $staticpage = StaticPage::create($input);

        Session::flash('flash_message', 'Static Page successfully created!');

        return redirect()->back();
    }


    public function show($id)
    {
        $staticpage = StaticPage::find($id);
        $data = ['staticpage' => $staticpage];
        return view('admin.viewstaticpage')->with($data);
    }

    public function edit($id)
    {
        $staticpage = StaticPage::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['staticpage' => $staticpage, 'users' => $users, 'workflows' => $workflows];
        return view('admin.editstaticpage')->with($data);
    }


    public function update(Request $request, $id)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);

        $slug = DB::table('staticpage')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $staticpage = StaticPage::FindOrFail($id);

        $staticpage->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/staticpage';
            $pathThumb = public_path() . '/assets/img/staticpage/thumbnails/';
            $pathMedium = public_path() . '/assets/img/staticpage/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/staticpage/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });


            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;


            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;

        }


        $staticpage->fill($input)->save();


        Session::flash('flash_message', 'Static page successfully edited!');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $staticpage = StaticPage::FindOrFail($id);

        if($staticpage->image) {
            // Delete staticpage images
            $image = public_path() . '/assets/img/staticpage/' . $staticpage->image;
            $imagemedium = public_path() . '/assets/img/staticpage/medium/' . $staticpage->image;
            $imagethumb = public_path() . '/assets/img/staticpage/thumbnails/' . $staticpage->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $staticpage->delete();
        return redirect('/admin/staticpage');
    }
}
