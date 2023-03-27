@extends('layouts.master')
@section('title','Online Shop')
@section('content')

  <!-- Checkout Start -->
  <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Add Category</span></h5>
            <form id="myForm" method="POST" id="myForm" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Category Name</label>
                            <input class="form-control" type="text" placeholder="" name="cat_name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" placeholder="" name="image">
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary" >Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


@endsection