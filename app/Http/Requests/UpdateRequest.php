<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'categories'=>'required',
            'img' => 'image',
            'description' => 'required|min:150|max:2000',
            'tags'=>'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'author.required' => 'Inserire il nome dello sviluppatore',
            'author.max' => 'Il nome dello sviluppatore può essere lungo al massimo 100 caratteri',
            'title.required' => 'Inserire il titolo del videogioco',
            'title.max' => 'Il nome del videogioco può essere lungo al massimo 100 caratteri',
            'img.image' => 'Inserire un formato valito tra .jpg, .jpeg, .png, .bmp, .gif, .svg, or .webp',
            'description.required' => 'Inserire la descrizione dell\'articolo',
            'description.min' => 'Minimo 200 caratteri',
            'categories.required'=>'Selezionare una o più categorie',
            'tags.required'=>'Inserire almeno due tag',
            'tags.min'=>'Il testo dei tag è troppo corto'
        ];
    }
}

