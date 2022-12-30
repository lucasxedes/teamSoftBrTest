<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'CNPJ' => 'required|numeric|unique:clients|digits_between:11,14',
            'corporate_name' => 'required|string|max:255|min:3',
            'contact_name' => 'required|string|max:255|min:3',
            'telephone' => 'required|numeric|digits_between:11,11|unique:clients',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Validation.name.required',
            'name.string' => 'Validation.name.string',
            'name.max' => 'Validation.name.max',
            'name.min' => 'Validation.name.min',

            'telephone.required' => 'Validation.telephone.required',
            'telephone.numeric' => 'Validation.telephone.numeric',
            'telephone.unique' => 'Validation.telephone.unique',
            'telephone.digits_between' => 'Validation.telephone.digits_between',

            'CNPJ.required' => 'Validation.CNPJ.required',
            'CNPJ.numeric' => 'Validation.CNPJ.numeric',
            'CNPJ.unique' => 'Validation.CNPJ.unique',
        ];
    }
}
