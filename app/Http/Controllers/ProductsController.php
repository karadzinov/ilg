<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product as Product;
use App\Workflow as Workflow;
use App\Category as Category;
use App\User as User;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'asc')->paginate(10);
        $data = ['products' => $products];
        return view('admin.product')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['categories' => $categories, 'users' => $users, 'workflows' => $workflows];
        return view('admin.createproduct')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);

        $slug = Product::where('title', $request['title'])->get();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/products';
            $pathThumb = public_path() . '/assets/img/products/thumbnails/';
            $pathMedium = public_path() . '/assets/img/products/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/products/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            /*
                        $watermark = Image::make(public_path() . '/assets/img/watermark.png')->resize(300, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });;

                        $watermarkthumb = Image::make(public_path() . '/assets/img/watermark.png')->resize(50, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });

                        $watermarkthumb->opacity(30);
                        $watermark->opacity(30);

                        $imagethumb->insert($watermarkthumb, 'center');
                        $imagemedium->insert($watermark, 'center');

                        */
            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imagethumb;


        $product = Product::create($input);

        Session::flash('flash_message', 'Product successfully created!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::FindOrFail($id);
        $categories = Category::get();
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['product' => $product, 'categories' => $categories, 'users' => $users, 'workflows' => $workflows];
        return view('admin.editproduct')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
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

        $slug = DB::table('product')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $product = Product::FindOrFail($id);

        $product->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/products';
            $pathThumb = public_path() . '/assets/img/products/thumbnails/';
            $pathMedium = public_path() . '/assets/img/products/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/products/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            /*          $watermark = Image::make(public_path() . '/assets/img/watermark.png')->resize(300, null, function ($constraint) {
                          $constraint->aspectRatio();
                      });;

                      $watermarkthumb = Image::make(public_path() . '/assets/img/watermark.png')->resize(50, null, function ($constraint) {
                          $constraint->aspectRatio();
                      });



                      $watermarkthumb->opacity(30);
                      $watermark->opacity(30);

                      $imagethumb->insert($watermarkthumb, 'center');
                      $imagemedium->insert($watermark, 'center');
            */
            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;


            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;

        }


        $product->fill($input)->save();


        Session::flash('flash_message', 'Product successfully edited!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::FindOrFail($id);

        // Delete blog images
        $image = public_path() . '/assets/img/products/' . $product->image;
        $imagemedium = public_path() . '/assets/img/products/medium/' . $product->image;
        $imagethumb = public_path() . '/assets/img/products/thumbnails/' . $product->image;

        unlink($image);
        unlink($imagemedium);
        unlink($imagethumb);

        $product->delete();
        return redirect('/admin/product');
    }
}
