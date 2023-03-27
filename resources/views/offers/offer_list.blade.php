@extends('layouts.master')
@section('title','Online Shop')
@section('content')

      <!-- Cart Start -->
      <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
            <a href="{{route('offer.create')}}"  class="btn btn-primary float-right mb-2" >Add Offer</a>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Offer</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach($offers as $offer)
                        <tr>
                            <td class="align-middle">{{$offer->off_name}}</td>
                            <td class="align-middle"><img src="{{asset('/images/'.$offer->image)}}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle">
                                <a href="{{route('offer.edit',$offer->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{route('off_delete',$offer->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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