<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'zip_code' => 'required|digits_between:8,8|numeric',
            'public_place' => 'required|string',
            'number' => 'required|numeric',
            'complement' => 'string',
            'district' => 'required',
            'city' => 'required|string',
            'state' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'corporate_name.required' => 'Validation.corporate_name.required',
            'corporate_name.string' => 'Validation.corporate_name.string',
            'corporate_name.max' => 'Validation.corporate_name.max',
            'corporate_name.min' => 'Validation.corporate_name.min',

            'telephone.required' => 'Validation.telephone.required',
            'telephone.numeric' => 'Validation.telephone.numeric',
            'telephone.unique' => 'Validation.telephone.unique',
            'telephone.digits_between' => 'Validation.telephone.digits_between',

            'CNPJ.required' => 'Validation.CNPJ.required',
            'CNPJ.numeric' => 'Validation.CNPJ.numeric',
            'CNPJ.unique' => 'Validation.CNPJ.unique',

            'zip_code.required' => 'Validation.cep.required',
            'zip_code.digits_between' => 'Validation.cep.digits_between',
            'zip_code.numeric' => 'Validation.cep.numeric'
        ];
    }
}
