<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{



    public function rules(Request $request)
    {
        return [
            'description' => 'required|max:255',
            'type' => 'required',
            'color' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:5120|'.Rule::requiredIf(function () {  return request()->method() == 'POST' ;}),
            //'photo' => 'required_if_declined:photo,null',
            //'photo' => 'required|image',
            'city' => 'required',
            'shelter' => 'required|max:255',
            //'unique:users,email_address,'.$user->id
        ];
    }


    public function messages()
    {
        return [

            'description.required' => 'O campo descricão e obrigatório',
            'description.max' => 'O campo descricão deve ter no maximo 255 caracteres',
            'type.required' => 'O campo tipo e obrigatório',
            'color.required' => 'O campo cor e obrigatório',
            'photo.required' => 'O campo imagem é obrigatório',
            'photo.required_if' => 'O campo imagem é obrigatório',
            'photo.image' => 'O campo imagem deve ser uma imagem',
            'photo.mimes' => 'O campo imagem deve ser uma imagem',
            'photo.size' => 'O campo imagem deve ter no maximo 5MB',
            'city.required' => 'O campo Cidade e obrigatório',
            'shelter.required' => 'O campo Abrigo e obrigatório',


        ];
    }

}
