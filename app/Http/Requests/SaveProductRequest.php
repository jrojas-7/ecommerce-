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
            'nombre' => 'required|string|max:255',
            'titulo' => 'required|string|max:30',
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
