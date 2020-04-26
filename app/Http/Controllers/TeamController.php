<?php

namespace App\Http\Controllers;

use App\Team;
use App\Workflow;
use App\User as User;
use Validator;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $team = Team::all();
        $data = ['user' => $user, 'team' => $team];
        return view('admin.team.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $teams = Team::orderby('name', 'asc');
        $workflows = Workflow::orderby('id', 'desc');
        $data = ['users' => $users, 'teams' => $teams, 'workflows' => $workflows];
        return view('admin.team.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,[
           'name' => 'required|max:255',
            'title' => 'required|max:255',
            'image' => 'required|max:255',
            'bio' => 'required|max:255',
        ]);

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }




        $request['name'] = strip_tags($request['name']);
        $request['slug'] = str_slug($request['name']);

        $slug = Team::where('name', $request['name'])->get();
        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '_' . $count;

        $name = $request->get('name');
        $fullname = explode(' ', $name);
        $firstname=$fullname[0];
        $lastname=$fullname[1];
        $slugname = implode('-', $fullname);

        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path('/assets/img/team/');
            $pathThumb = public_path('assets/img/team/thumbnails/');
            $pathMedium = public_path('assets/img/team/medium/');
            $extension = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['name']) . '_' . $count . '.' . $extension;
            } else {
                $imageName = str_slug($input['name']) . '.' . $extension;
            }


            $image->move($path, $imageName);

            $findimage = public_path('/assets/img/team/'.  $imageName);
            $imgthumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imgmedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imgthumb->save($pathThumb . $imageName);
            $imgmedium->save($pathMedium . $imageName);

            $image = $request->imgthumb = $imageName;
            $imgthumb = $request->image = $imageName;
            $imgmedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imgmedium;
        $input['imagethumb'] = $imgthumb;
        $input['slug_name'] = $slugname;



        $team = Team::create($input);

        Session::flash('flash_message', 'Team member successfully added!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id' , 'desc');
        $data = ['team' => $team, 'users' => $users, 'workflows' => $workflows];
        return view('admin.team.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::FindOrFail($id);

        $request['name'] = strip_tags($request['name']);

        $slugname = str_slug($request['name']);

        $input = $request->all();

        $team->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/team';
            $pathThumb = public_path() . '/assets/img/team/thumbnails/';
            $pathMedium = public_path() . '/assets/img/team/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/team/' . $imageName;
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
        $input['slug_name'] = $slugname;

            
        $team->fill($input)->save();

        Session::flash('flash_message', 'Member successfully updated');
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::FindOrFail($id);

        $img = public_path( '/assets/img/team/' . $team->image);
        $imgmedium = public_path( '/assets/img/team/medium/' . $team->image);
        $imgthumb = public_path( '/assets/img/team/thumbnails/' . $team->image);

        unlink($img);
        unlink($imgmedium);
        unlink($imgthumb);

        $team->delete();

        Session::flash('flash_message', 'Successfully Deleted!');
        return redirect('admin/team');

    }
}
