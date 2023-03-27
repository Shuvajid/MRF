@extends('layouts.master')
@section('title','Online Shop')
@section('content')

      <!-- Cart Start -->
      <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
            <a href="{{route('product.create')}}"  class="btn btn-primary float-right mb-2" >Add Product</a>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach($products as $product)
                        <tr>
                            <td class="align-middle">{{$product->pro_name}}</td>
                            <td class="align-middle">{{$product->cat_name}}</td>
                            <td class="align-middle">{{$product->price}} </td>
                            <td class="align-middle"><img src= "/images/{{ $product->image }}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle">{{$product->quantity}}</td>
                            <td class="align-middle">
                                @if($product->status ==1)
                                <span class="badge light ">
                                    <i class="fa fa-circle text-success me-1"></i>
                                    In Stock
                                </span>
                                @else
                                <span class="badge light ">
                                    <i class="fa fa-circle text-danger me-1"></i>
                                   Out Of Stock
                                </span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{route('pro_delete', $product->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->


@endsection