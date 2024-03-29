<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ordersCreateRequest extends FormRequest
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
        'phone'=>'size:11',
        'number'=>'max:3',
        'order_number'=>'unique:orders,order_number'

        ];
    }
}
