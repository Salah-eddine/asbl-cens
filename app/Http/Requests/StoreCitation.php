<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitation extends FormRequest
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
            'auteur'=>'max:60',
            'citation'=>'max:300|required',
        ];
    }
    public function messages()
    {
        return [
            'auteur.max' => 'Le nombre de caractère est limité a :max',
            'citation.required'  => 'Ce champ doit être rempli',
            'citation.max'=> 'Le nombre de caractère est limité à :max'
        ];
    }
}
