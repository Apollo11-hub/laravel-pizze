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
            'prezzo' => 'required|numeric|between:0.00,999.99',
            'ingredienti' => 'required',
            'vegetariana' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Questo campo è obbligatorio!',
            'nome.max' => 'Questo campo non può superare i :max caratteri!',
            'nome.min' => 'Questo campo non deve essere inferiore ai :min caratteri!',
            'prezzo.required' => 'Questo campo è obbligatorio!',
            'prezzo.between' => 'Questo prezzo è incorretto numero :max',
            'ingredienti.required' => 'Questo campo è obbligatorio!',
            'vegetariana.required' => 'Questo campo è obbligatorio!'
        ];
    }
}
