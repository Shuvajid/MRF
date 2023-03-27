@extends('layouts.master')
@section('title','Shop')
@section('content')
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> All Brands</span></h2>
        <div class="row px-xl-5">
    <!-- Categories Start -->
 <div class="container-fluid pt-5">

        <div class="row px-xl-5 pb-3">
            @foreach($brandetails as $brandetail)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('/images/'.$brandetail->image)}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <a href=""><h6>{{$brandetail->brand_name}}</h6></a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->
      
    </div>
    <!-- Products End -->
    @endsection