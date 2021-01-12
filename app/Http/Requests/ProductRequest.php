<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|max:100',
            'content'     => 'required|max:200',
            'image'       => 'required|max:4',
            'price'       => 'required|numeric',
            'descount'    => 'numeric|nullable',
            'quantity'    => 'required',
            'category_id' => 'required',
            // 'color'       => 'required',
            // 'size'       => 'required',

        ];
    }
}
