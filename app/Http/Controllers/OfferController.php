<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Offer;
use App\Mail\OfferCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Notifications\OfferCreated as NotificationsOfferCreated;
use Illuminate\Support\Facades\Auth;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('offers.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferRequest $request)
    {
        // $offer = Offer::create($request->validated());
        // Mail::to(config('mail.admin_email'))->send(new OfferCreated($offer));


        // $offer = new Offer();
        // $offer->fill($request->validated());
        $data=[
            ...$request->validated(),
            'author_id' => auth()->user()->id,
        ];
        $offer = Offer::create($data);

        $user = User::find(1);
        $user->notify(new \App\Notifications\OfferCreated($offer));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
