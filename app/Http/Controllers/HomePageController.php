<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Slider;
use App\Sliders;
use Illuminate\Http\Request;
use App\Product as Product;
use App\Category as Category;
use App\StaticPage as StaticPage;
use App\Services as Services;
use App\Settings as Settings;
use App\Referral as Refferal;
use DB;

class HomePageController extends Controller
{


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
        return view('main.homepage')->with($data);
    }

    public function staticpages($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $staticpage = StaticPage::where("slug","=",$slug)->first();
        $staticpages = StaticPage::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $data = ["settings" => $settings, "services" => $services, "staticpage" => $staticpage, "staticpages" => $staticpages,"allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.staticpage')->with($data);
    }


    public function services($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $service = Services::where('slug','=',$slug)->first();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["service" => $service, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
        return view('main.services')->with($data);
    }

    public function product($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $product = Product::where('slug','=',$slug)->first();
        $sliders = Sliders::where('product_id','=',$product->id)->get();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["sliders" => $sliders, "product" => $product, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
        return view('main.product')->with($data);
    }

    public function referents($slug) {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $referral = Refferal::all();
        if($slug == "all") {
            $products = Product::all();
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();
            $data = ["referral" => $referral, "products" => $products, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
            return view('main.allreferral')->with($data);
        }
        else {
            $category = Category::where('slug','=',$slug)->first();
            $referral = Refferal::where('slug', '=', $slug)->first();

        }



        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["referral" => $referral, "category" => $category, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
        return view('main.referral')->with($data);

    }
    public function categories($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();

        if($slug == "all") {
            $products = Product::all();
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();
            $data = ["products" => $products, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
            return view('main.allcategories')->with($data);
        }
        else {
            $category = Category::where('slug','=',$slug)->first();
            $products = Product::where('category','=',$category->id)->get();
        }

        $sliders = Sliders::where('category_id','=',$category->id)->get();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["category" => $category, "sliders" => $sliders, "products" => $products, "services" => $services,"staticpages" => $staticpages,"settings" => $settings,"tree" => $tree,"categories" => $categories,"allcategories" => $allcategories];
        return view('main.categories')->with($data);
    }

}
