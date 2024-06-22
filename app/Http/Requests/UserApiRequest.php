<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequestBase;
class UserApiRequest extends ApiRequestBase
{

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];
    }


}
