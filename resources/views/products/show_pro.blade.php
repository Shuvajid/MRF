@extends('layouts.master')
@section('title','Online Shop')
@section('content')

 <!-- Shop Start -->
 <div class="container-fluid">
        <div class="row px-md-5">
        


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="pimg img-fluid " src="{{asset('/images/'.$product->image)}}" alt="">
                               
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{route('details',$product->id)}}">{{$product->pro_name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$product->price }}</h5><h6 class="text-muted ml-2"></h6>
                                </div>
                                <br>
                                <a class="h6 text-decoration-none text-truncate" href="{{route('details',$product->id)}}">More Details...</a>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


@endsection