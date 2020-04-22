<?php

namespace App\Http\Controllers;

use App\Category as Category;
use App\Product as Product;
use App\Referral as Refferal;
use App\Services as Services;
use App\Settings as Settings;
use App\Slider;
use App\StaticPage as StaticPage;
use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::firstOrFail();
        $staticpages = StaticPage::all();
        $services = Services::get();
        $slides = Slider::all();
        $referrals = Refferal::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = DB::table('product')->join('categories', 'product.category', '=', 'categories.id')->groupBy('categories.id')->take(8)->get();
        $data = ["referrals" => $referrals, "settings" => $settings, "slides" => $slides,"services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.contact')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors(), 400]);
        }


        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        $data = ["messageText" => $message, "name" => $name, "email" => $email];
        Mail::send('emails.contact-form', $data, function ($m) use ($data) {
            $m->from(env('MAIL_USERNAME'), 'Your Application');

            $m->to('martin@pinGdevs.com', 'Martin')->subject('Your Reminder!');
        });
       // return response()->json($data, 200);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
