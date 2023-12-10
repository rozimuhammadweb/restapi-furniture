<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Models\UserPaymentCards;
use App\Http\Requests\StoreUserPaymentCardsRequest;
use App\Http\Requests\UpdateUserPaymentCardsRequest;

class UserPaymentCardsController extends Controller
{

    public function index()
    {
        return UserPaymentCards::all();
    }


    public function create()
    {
        //
    }


    public function store(StoreUserPaymentCardsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\UserPaymentCards $userPaymentCards
     * @return \Illuminate\Http\Response
     */
    public function show(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\UserPaymentCards $userPaymentCards
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateUserPaymentCardsRequest $request
     * @param \App\Models\UserPaymentCards $userPaymentCards
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPaymentCardsRequest $request, UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\UserPaymentCards $userPaymentCards
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPaymentCards $userPaymentCards)
    {
        //
    }
}
