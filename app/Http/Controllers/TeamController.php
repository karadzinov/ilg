<?php

namespace App\Http\Controllers;

use App\Team;
use App\Workflow;
use http\Client\Curl\User ;
use Illuminate\Http\Request;
use Intervention\Image\Image as Image;
use App\Http\Requests;
use MongoDB\Driver\Session;

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
        $validator = Validator::make([
           'name' => 'required',
            'title' => 'required',
            'image' => 'required',
            'bio' => 'required',
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

        $input = $request->all();


        if($request->hasFile('image')){

            $image = $request->File('image');
            $path = public_path('/assets/img/team/');
            $paththumb = public_path('assets/img/team/thumbnails');
            $pathmedium = public_path('assets/img/team/medium');
            $extension = $image->getClientOriginalExtension();

            $imageName = str_slug($input['name']) . '_' . $extension;

            $image->move(public_path($path, $imageName));

            $findImage = public_path() . '/assets/img/team' .$imageName;
            $imgthumb = Image::make($findImage)->resize('200' , null , function ($constraint){
                $constraint->AspectRatio();
            });
            $imagemedium = Image::make($findImage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imgthumb->save($paththumb . $imageName);
            $imagemedium->save($pathmedium . $imageName);

            $image = $request->$imgthumb = $imageName;
            $imgthumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imgthumb;

        Team::create($input);

        Session::flash('flash_message', 'A team member has been added');

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
        $user = User::get();
        $workflow = Workflow::orderBy('id' , 'desc');
        $data = ['team' => $team, 'user' => $user, 'workflow' => $workflow];
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
        $slug = str_slug($request['name']);
        
        $input = $request->all();
        $team->fill($input)->save();
        
        if($request->hasFile('image')){

            $image = $request->file('image');
            $path = public_path() .'/assets/img/team';
            $paththumb = public_path() .'/assets/img/team/thumbnails';
            $pathmedium = public_path().'/assets/img/team/medium';
            $extension = $image->getOriginalExtension();

            $imageName = str_slug($input['name']) . '_' . $extension;

            $image->move(public_path($path, $imageName));

            $findImage = public_path() . '/assets/img/team' .$imageName;
            $imgthumb = Image::make($findImage)->resize('200' , null , function ($constraint){
                $constraint->aspectRatio();
            });
            $imagemedium = Image::make($findImage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imgthumb->save($paththumb . $imageName);
            $imagemedium->save($pathmedium . $imageName);

            $image = $request->$imgthumb = $imageName;
            $imgthumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imgthumb;
            
        $team->fill($input)->save();

        Session::flash('flash_message', 'Team successfully updated');
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

        $img = public_path() . '/assets/img/slider/' . $team->image;
        $imgmedium = public_path() . '/assets/img/slider/medium/' . $team->image;
        $imgthumb = public_path() . '/assets/img/slider/thumbnails/' . $team->image;

        unlink($img);
        unlink($imgmedium);
        unlink($imgthumb);

        $team->delete();

        Session::flash('flash_message', 'Successfully Deleted!');
        return redirect('admin/team/index');

    }
}
