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

class MapsController extends Controller
{
	public function __construct() 
	{
		$this->middleware('auth');
	}


	public function index() 
	{
		return view('admin.maps');
	}
}
