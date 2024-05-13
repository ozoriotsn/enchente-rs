<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'city' => 'required',
            'photo' => 'sometimes|image',
            'shelter' => 'required|max:255',
        ];
    }


    public function messages()
    {
        return [

            'name.required' => 'O campo nome e obrigatório',
            'name.max' => 'O campo nome pode ter no maximo 255 caracteres',
            'photo.image' => 'O campo imagem deve ser uma imagem',
            'photo.required' => 'O campo imagem e obrigatório',
            'photo.same' => 'O campo imagem deve ser uma imagem',
            'city.required' => 'O campo Cidade e obrigatório',
            'shelter.required' => 'O campo Abrigo e obrigatório',
            'shelter.max' => 'O campo Abrigo pode ter no maximo 255 caracteres',

        ];
    }

}
