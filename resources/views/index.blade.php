@extends('layouts.master')
@section('title','Online Shop')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="assets/img/carousel-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                 
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('propage')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="assets/img/carousel-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('propage')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="assets/img/carousel-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                    
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('propage')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->

   <!-- Notice start -->
   <!-- Notice End -->
   <div class="container notice">
   @foreach($notices as $notice)
       <b><marquee class=" nott"behavior="" direction="left">{{$notice->not_name}}</marquee></b>
    @endforeach
    </div>
     
 <!-- Categories Start -->
 <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('/images/'.$category->image)}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <a href="{{route('pro',$category->id)}}"><h6>{{$category->cat_name}}</h6></a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->

   
    <!-- Products End -->
     <!-- Offer Start -->
     <div class="container-fluid pt-5 pb-3">
     @foreach($offers as $offer)
        <div class="row px-xl-5">
            <div class="col-md-12">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('/images/'.$offer->image)}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{$offer->off_name}}</h6>
                        <h3 class="text-white mb-3">{{$offer->description}}</h3>
                        
                    </div>
                </div>
            </div>
        
        </div>
        @endforeach
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> All Products</span></h2>
        <div class="row px-xl-5">
        @foreach($recents  as $recent)
        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('/images/'.$recent->image)}}" alt="">
                               
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{route('details',$recent->id)}}">{{$recent->pro_name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$recent->price }}.00 BDT</h5><h6 class="text-muted ml-2"></h6>
                                </div>
                                <br>
                                <a class="h6 text-decoration-none text-truncate" href="{{route('details',$recent->id)}}">More Details..</a>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
    <!-- Products End -->
    <!-- Products End -->


    @endsection