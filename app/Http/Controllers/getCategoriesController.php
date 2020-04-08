<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog as Blog;

class getCategoriesController extends Controller
{
    public function index($slug, $slug_portal) {
    	$blog = Blog::where('slug',$slug_portal)->get();
    	$data = ["blog" => $blog];
    	return view("showblog")->with($data);
    }
}
