<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255|string',
            'titulo' => 'required|max:30|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'imagen' => 'image',
            'descripcion' => 'required|string',
            'categoria' => 'required|max:80|string',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es obligatorio'
        ];
    }
}
