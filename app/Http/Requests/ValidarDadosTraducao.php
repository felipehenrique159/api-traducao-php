<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ValidarDadosTraducao extends FormRequest
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
            'de' => 'required|string',
            'para' => 'required|string',
            'texto' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'de.required' => 'Campo "de" é obrigatório!',
            'para.required' => 'Campo "para" é obrigatório!',
            'texto.required' => 'Campo "texto" é obrigatório!',
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new JsonResponse([
            'result' => 'Error',
            'message' => 'Dados Inválidos',
            'errors' => $validator->errors()
            
        ], 422);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }

}
