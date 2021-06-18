<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //new
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'image' => 'image',
            'jk' => 'max:255',
            'ttl' => 'max:255',
            'notel' => 'max:255',
        ];
    }
}
