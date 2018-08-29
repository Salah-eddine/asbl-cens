<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscription extends FormRequest
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
            "nom" => "required|max:60|",
            "mail"=> "required|email|unique:email",
            "phone"=> "min:10|numeric",
            "team_id" => "required",
            "message" => "max:500",
        ];
    }
    

    public function messages()
    {
        return [
            "nom.required" => "Champ requis!",
            "nom.max" => "Le nombre de caractère est limité à :max!",
            "mail.required" => "Champ requis!",
           
            
            "team_id.required"=> "Choisissez votre team!",
            "message.max" => "Le nombre de caractère est limité à :max!",
            "phone.min" => "Le nombre de caractère est de :min caractère minimum!",
            "phone.numeric" => "Entrez un numéro valide!"

        ];
    }
}
