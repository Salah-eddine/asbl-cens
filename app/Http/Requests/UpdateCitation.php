<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCitation extends FormRequest
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
            'citation'=>'max:300',
        ];
    }
    public function messages()
    {
        return [
            'auteur.max'=>'Le nombre de caractère est limité à :max',
            'citation.max'=>'Le nombre de caractère est limité à :max',
        ];
    }
}
