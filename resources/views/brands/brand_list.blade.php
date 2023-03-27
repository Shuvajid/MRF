@extends('layouts.master')
@section('title','Online Shop')
@section('content')

      <!-- Cart Start -->
      <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
            <a href="{{route('brand.create')}}"  class="btn btn-primary float-right mb-2" >Add Brand</a>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach($brands as $brand)
                        <tr>
                            <td class="align-middle">{{$brand->brand_name}}</td>
                            <td class="align-middle"><img src="{{asset('/images/'.$brand->image)}}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle">
                                <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{route('brand_delete',$brand->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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