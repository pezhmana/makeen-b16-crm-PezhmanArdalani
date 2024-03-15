<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min :3|max : 20',
            'last_name'=>'required|min :3|max : 20',
            'phone'=> 'required|integer|size:11|unique:users,phone,except,id',
            'passsword'=>'required|min:5|',
            'country'=>'nullable',
            'descreption'=>'nullable',


        ];
    }
}
