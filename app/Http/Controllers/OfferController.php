<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers= Offer::all();
        return view ('offers.offer_list',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.add_offer');
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
                'off_name'  => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
        );
        $offer = new Offer();
        $offer->off_name = $request->off_name;
        $offer->description = $request->description;
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $offer->image = $name;
         }
        $offer->save();

        return redirect(route('offer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);

        return view('offers.edit_offer',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'off_name'  => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
        );
        $offer = Offer::find($id);
        $offer->off_name = $request->off_name;
        $offer->description = $request->description;
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $offer->image = $name;
         }
        $offer->save();

        return redirect(route('offer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::destroy($id);
        return redirect(route('offer.index'));
    }
}
