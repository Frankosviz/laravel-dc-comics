<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'required|min:3|nullable',
            'author' => 'required|max:100|min:3',
            'release_date' => 'required|date',
            'condition' => 'required|in:good,normal,bad',
            'rare' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio, per favore inseriscilo correttamente',
            'description.required' => 'La descrizione è obbligatoria, per favore inseriscila correttamente',
            'author.required' => 'L\'autore è obbligatorio, per favore inseriscilo correttamente',
            'release_date.required' => 'La data di uscita è obbligatoria, per favore inseriscila correttamente',
            'condition.required' => 'La condizione è obbligatoria, per favore inseriscila correttamente',
            'rare.required' => 'La rarità è obbligatoria, per favore inseriscila correttamente'
        ];
    }
}
