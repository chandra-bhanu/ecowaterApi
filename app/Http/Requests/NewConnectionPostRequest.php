<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewConnectionPostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'mobile' => 'required|max:255',
            'requested_product_id' => 'required',
        ];
    }
}
