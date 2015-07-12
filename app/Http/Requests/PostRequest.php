<?php

namespace LaravelExpress\Http\Requests;

use LaravelExpress\Http\Requests\Request;

class PostRequest extends Request
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
            'title' => 'required|min: 8',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Preenchimento obrigatório',
            'min' => 'Preenchimento mínimo de 8 caracteres'
        ];
    }
}
