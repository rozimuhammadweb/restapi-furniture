<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Http\Requests\StoreDeliveryMethodRequest;
use App\Http\Requests\UpdateDeliveryMethodRequest;

class DeliveryMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeliveryMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryMethodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryMethodRequest  $request
     * @param  \App\Models\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryMethodRequest $request, DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMethod $deliveryMethod)
    {
        //
    }
}
