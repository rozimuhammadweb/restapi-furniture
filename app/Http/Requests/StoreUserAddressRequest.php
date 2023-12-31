<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'lattitude' => 'required',
            'longitude' => 'required',
            'region' => 'required',
            'district' => 'required',
            'street' => 'required',
            'home' => 'nullable'
        ];
    }
}
