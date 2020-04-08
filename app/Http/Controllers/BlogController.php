<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog as Blog;
use App\Region as Region;
use App\User as User;
use App\Country as Country;
use App\Category as Category;
use App\Workflow as Workflow;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;



class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        $data = ['blogs' => $blogs];
        return view('admin.blogs')->with($data);
    }


    public function create()
    {
        $regions = Region::all();
        $users = User::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $workflows = Workflow::orderBy('id','desc')->get();
        $data = ['countries' => $countries,'regions' => $regions,'users' => $users,'workflows' => $workflows];
        return view('admin.createblog')->with($data);
    }


    public function store(Request $request)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'region_id' => 'required',
            'description' => 'required',
            'image' => 'required',
            ]);

        if ($errors->fails()) {
            return redirect()->back()
            ->withErrors($errors)
            ->withInput();
        }

        $request['region_id'] = implode(",", $request['region_id']);
        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);
        $request['subtitle'] = strip_tags($request['subtitle']);



        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/blog';
            $pathThumb = public_path() . '/assets/img/blog/thumbnails/';
            $pathMedium = public_path() . '/assets/img/blog/medium/';
            $ext = $image->getClientOriginalExtension();
            $imageName = str_slug($input['title']) . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/blog/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $watermark = Image::make(public_path() . '/assets/img/watermark.png')->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });;

            $watermarkthumb = Image::make(public_path() . '/assets/img/watermark.png')->resize(50, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $watermarkthumb->opacity(30);
            $watermark->opacity(30);

            $imagethumb->insert($watermarkthumb, 'center');
            $imagemedium->insert($watermark,'center');

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imagethumb;


        $blog = Blog::create($input);

        Session::flash('flash_message', 'Main blog successfully created!');

        return redirect()->back();

    }

    public function show($id)
    {
        $blog = Blog::FindOrFail($id);
        $data = ['blog' => $blog];
        return view('admin.blog')->with($data);
    }


    public function edit($id)
    {
        $regions = Region::all();
        $users = User::all();
        $blog = Blog::FindOrFail($id);
        $countries = Country::orderBy('name', 'asc')->get();
        $workflows = Workflow::orderBy('id','desc')->get();
        $data = ['countries' => $countries,'regions' => $regions,'users' => $users,'workflows' => $workflows,'blog' => $blog];
        return view('admin.editblog')->with($data);
    }


    public function update(Request $request, $id)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'region_id' => 'required',
            'description' => 'required',
            ]);

        if ($errors->fails()) {
            return redirect()->back()
            ->withErrors($errors)
            ->withInput();
        }

        $request['region_id'] = implode(",", $request['region_id']);
        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);
        $request['subtitle'] = strip_tags($request['subtitle']);



        $input = $request->all();
        $blog = Blog::FindOrFail($id);

        $blog->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/blog';
            $pathThumb = public_path() . '/assets/img/blog/thumbnails/';
            $pathMedium = public_path() . '/assets/img/blog/medium/';
            $ext = $image->getClientOriginalExtension();
            $imageName = str_slug($input['title']) . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/blog/' . $imageName;
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



        $blog->fill($input)->save();


        Session::flash('flash_message', 'Main blog successfully edited!');

        return redirect()->back();
    }


    public function destroy($id)
    {
        $blog = Blog::FindOrFail($id);

        // Delete blog images
        $image = public_path() . '/assets/img/blog/'.$blog->image;
        $imagemedium = public_path() . '/assets/img/blog/medium/'.$blog->image;
        $imagethumb = public_path() . '/assets/img/blog/thumbnails/'.$blog->image;

        unlink($image);
        unlink($imagemedium);
        unlink($imagethumb);

        $blog->delete();
        return redirect('/admin/blog');
    }
}
