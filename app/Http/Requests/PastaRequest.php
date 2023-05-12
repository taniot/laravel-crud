<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PastaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // tutti sono autorizzati
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'src' => 'nullable|url|max:255|ends_with:png,jpg,webp',
            'titolo' => 'required|max:50',
            'tipo' => [
                'required',
                Rule::in(['lunga', 'corta', 'cortissima']),
                'max:10'
            ],
            'cottura' => 'required|between:5,20|numeric',
            'peso' => 'required|between:250,1000|numeric',
            'descrizione' => 'required',
         ];
    }


    public function messages(){

        $obbligatorio =  ':attribute è obbligatorio.';

        return [
            'titolo' =>  $obbligatorio,
            'cottura.required' => $obbligatorio
        ];
    }
}

