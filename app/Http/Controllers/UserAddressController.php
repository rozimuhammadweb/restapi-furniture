<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;

class UserAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->addresses;
    }


    public function store(StoreUserAddressRequest $request)
    {
        auth()->user()->addresses()->create($request);
        return true;

    }


    public function show(UserAddress $userAddress)
    {
        //
    }


    public function edit(UserAddress $userAddress)
    {
        //
    }


    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
