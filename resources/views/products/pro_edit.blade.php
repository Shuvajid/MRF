@extends('layouts.master')
@section('title','Online Shop')
@section('content')

  <!-- Checkout Start -->
  <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Add Category</span></h5>
            <form id="myForm" method="POST" id="myForm" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" placeholder="" name="pro_name" value="{{$product->pro_name}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Category</label>
                            <select class="custom-select" name="cat_id">
                                <option selected> -- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"@if($product->cat_id == $category->id) selected @endif>{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quantity</label>
                            <input class="form-control" type="number" placeholder="" name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status</label>
                            <select class="custom-select" name="status">
                                <option selected> ---status---</option>
                                <option value="1">In Stock</option>
                                <option value="0">Out Of Stock</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Price</label>
                            <input class="form-control" type="text" placeholder="" name="price" value="{{$product->price}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Model</label>
                            <input class="form-control" type="text" placeholder="" name="model" value="{{$product->model}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Description</label>
                            <textarea class="form-control" type="text" placeholder="" name="description" >{{$product->description}}</textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Price Of Description</label>
                            <textarea class="form-control" type="text" placeholder="" name="price_description" >{{$product->price_description}}</textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Color</label>
                            <input class="form-control" type="text" placeholder="" name="color"value="{{$product->color}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Technology</label>
                            <input class="form-control" type="text" placeholder="" name="technology"value="{{$product->technology}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Supported Device</label>
                            <input class="form-control" type="text" placeholder="" name="supported"value="{{$product->supported}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Image</label>
                            <img src= "/images/{{ $product->image }}" style="width:504px;height:228px"> 
                            <input class="form-control" type="file" placeholder="" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


@endsection