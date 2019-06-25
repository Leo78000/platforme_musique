<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMusicienForm extends FormRequest
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
            'name'=>'required',
            'first_name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            'city'=>'required',
            'instrument'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Champ nom obligatoire',
            'first_name.required'=>'Champ prénom obligatoire',
            'email.required'=>'Champ email obligatoire',
            'password.required'=>'Champ mot de passe obligatoire',
            'password_confirmation.required'=>'Champ confirmation obligatoire',
            'city.required'=>'Champ ville obligatoire',
            'instrument.required'=>'Champ instrument obligatoire',
        ];
    }
}
