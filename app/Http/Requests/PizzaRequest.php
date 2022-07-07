<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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
            'nome' => 'required|max:20|min:3',
            'prezzo' => 'required|numeric|between:0.00,100',
            'ingredienti' => 'required',
            'vegetariana' => 'required|max:2|min:2',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Questo campo è obbligatorio!',
            'nome.max' => 'Questo campo non può superare i :max caratteri!',
            'nome.min' => 'Questo campo non deve essere inferiore ai :min caratteri!',
            'prezzo.required' => 'Questo campo è obbligatorio!',
            'prezzo.between' => 'Questo prezzo è incorretto numero max 99.99',
            'ingredienti.required' => 'Questo campo è obbligatorio!',
            'vegetariana.required' => 'Questo campo è obbligatorio!',
            'vegetariana.max' => 'Questo campo non può superare i :max caratteri!',
            'vegetariana.min' => 'Questo campo non deve essere inferiore ai :min caratteri!',
        ];
    }
}
