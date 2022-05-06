<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewEmployeePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false;
    }
    public function rules()
    {
        return [
            //
        ];
    }
}
