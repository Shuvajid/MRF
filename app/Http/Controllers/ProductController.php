<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::join('categories','products.cat_id','=','categories.id')
                    ->get();
        return view('products.pro_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.add_product',compact('products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'pro_name'  => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
        );
        $product = new Product();
        $product->pro_name = $request->pro_name;
        $product->cat_id = $request->cat_id;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->price_description = $request->price_description;
        $product->status = 1;
        $product->price = $request->price;
        $product->model = $request->model;
        $product->color = $request->color;
        $product->technology = $request->technology;
        $product->supported = $request->supported;
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $product->image = $name;
         }
        $product->save();

        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $products = Product::where('products.id','LIKE','%'.$request->id.'%')
                    ->get();
        return view('products.show_pro',compact('products'));
    }
    public function details(Request $request)
    {
        $product = Product::where('products.id','LIKE','%'.$request->id.'%')
                    ->first();
        return view('products.pro_details',compact('product'));
    }
    public function pro(Request $request)
    {
        $pros = Product::where('products.cat_id','LIKE','%'.$request->id.'%')
                    ->get();
        return view('pages.shop',compact('pros'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.pro_edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'pro_name'  => 'required',
                'quantity'  => 'required',
                'price'  => 'required',
                'status'  => 'required',
                'model'  => 'required',
                'description'  => 'required',
                'price_description'  => 'required',
                'color'  => 'required',
                'technology'  => 'required',
                'supported'  => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
        );
        $product = Product::find($id);
        $product->pro_name = $request->pro_name;
        $product->cat_id = $request->cat_id;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->pro_name = $request->price_description;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->pro_name = $request->model;
        $product->pro_name = $request->color;
        $product->pro_name = $request->technology;
        $product->pro_name = $request->supported;
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $product->image = $name;
         }
        $product->save();

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect(route('product.index'));
    }

    
}
