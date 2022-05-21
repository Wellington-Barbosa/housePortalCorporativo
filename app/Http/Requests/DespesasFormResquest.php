<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DespesasFormResquest extends FormRequest
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
            'codigoDespesa' => 'required|min:1',
            'descricaoDespesa' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'codigoDespesa.required' => "O campo 'CÓDIGO' é obrigatório!",
            'codigoDespesa.min' => "O campo 'CÓDIGO' precisar ter 1 cararter",
            'descricaoDespesa.required' => "O campo 'DESCRIÇÃO' é obrigatório!",
            'descricaoDespesa.min' => "O campo 'DESCRIÇÃO' precisar ter mais do que 2 cararteres"
        ];
    }
}
