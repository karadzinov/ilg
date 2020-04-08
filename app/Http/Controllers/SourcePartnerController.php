<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User as User;
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
use App\Sourcepartner as SourcePartner;

class SourcePartnerController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$sourcepartners = SourcePartner::orderBy('created_at', 'asc')->paginate(10);
		$data = ["sourcepartners" => $sourcepartners];
		return view('admin.sourcepartners')->with($data);
	}


	public function create()
	{
		$countries = Country::orderBy('name', 'asc')->get();
		$data = ["countries" => $countries];
		return view('admin.createsourcepartner')->with($data);
	}


	public function store(Request $request)
	{

		$errors = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'webpage' => 'required',
			'description' => 'required',
			]);

		if ($errors->fails()) {
			return redirect()->back()
			->withErrors($errors)
			->withInput();
		}



		$input = $request->all();
		if ($request->hasFile('image')) {

			$image = $request->file('image');
			$path = public_path() . '/assets/img/sourcepartners';
			$pathThumb = public_path() . '/assets/img/sourcepartners/thumbnails/';
			$ext = $image->getClientOriginalExtension();
			$imageName = (rand(11111, 99999) . time()) . '.' . $ext;


			$image->move($path, $imageName);

			$findimage = public_path() . '/assets/img/sourcepartners/' . $imageName;
			$imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
			});

			$imagethumb->save($pathThumb . $imageName);


			$image = $request->imagethumb = $imageName;
			$imagethumb = $request->image = $imageName;

		}


		$input['image'] = $image;
		$input['imagethumb'] = $imagethumb;


		$sourcepartner = SourcePartner::create($input);

		Session::flash('flash_message', 'Source partner successfully created!');

		return redirect()->back();

	}


	public function show($id)
	{
		$sourcepartner = SourcePartner::find($id);
		$data = ['sourcepartner' => $sourcepartner];
		return view('sourcepartner')->with($data);
	}

	public function edit($id)
	{
		$sourcepartner = SourcePartner::find($id);
		$countries = Country::orderBy('name', 'asc')->get();

		$data = ['countries' => $countries, 'sourcepartner' => $sourcepartner];
		return view('admin.updatesourcepartner')->with($data);
	}


	public function update(Request $request, $id)
	{


		$id = $request['id'];
		$sourcepartner = SourcePartner::findOrFail($id);

		$errors = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'webpage' => 'required',
			'description' => 'required',
			]);

		if ($errors->fails()) {
			return redirect()->back()
			->withErrors($errors)
			->withInput();
		}

		$input = $request->all();

		if(!$request->status) {
			$input['status'] = 0;
		}

		if(!$request->our_partner) {
			$input['our_partner'] = 0;
		}


		$sourcepartner->fill($input)->save();

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = public_path() . '/assets/img/sourcepartners';
			$pathThumb = public_path() . '/assets/img/sourcepartners/thumbnails/';
			$ext = $image->getClientOriginalExtension();
			$imageName = (rand(11111, 99999) . time()) . '.' . $ext;

			$image->move($path, $imageName);

			$findimage = public_path() . '/assets/img/sourcepartners/' . $imageName;

			$imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
			});


			$imagethumb->save($pathThumb . $imageName);


			$sourcepartner->imagethumb = $imageName;
			$sourcepartner->image = $imageName;
			$sourcepartner->save();
		}

		Session::flash('flash_message', 'Source partner successfully edited!');

		return redirect()->back();
	}

	public function destroy($id)
	{
		$sourcepartner = SourcePartner::find($id);
		$sourcepartner->delete();
		return redirect('/admin/sourcepartners');
	}
}
