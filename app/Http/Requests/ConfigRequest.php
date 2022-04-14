<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'nom_plateforme' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'logo' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom_plateforme.required' => 'Le nom de la plateforme est obligatoire!',
            'telephone.required' => 'Le numero de telephone est obligatoire!',
            'email.required' => 'L\'email est obligatoire!',
            'adresse.required' => 'L\'adresse est obligatoire!',
            'logo.required' => 'Le logo est obligatoire!'
        ];
    }
}
