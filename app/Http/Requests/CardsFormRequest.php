<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required','min:1','max:26'],
            'subtitle'=>['required','min:1','max:26'],
            'text'=>['required','min:1','max:500'],
        ];
    }

    public function messages()
    {
        return[
            'text.required' => 'O campo texto é obrigatório.',
            'text.min'=>'O mínimo de caracteres no texto é :min caracteres.',
            'text.max'=>'O máximo de caracteres no texto é :max caracteres.',
            'title.required' => 'O campo Title é obrigatório.',
            'title.min'=>'O mínimo de caracteres no Title é :min caracteres.',
            'title.max'=>'O máximo de caracteres no Title é :max caracteres.',
            'subtitle.required' => 'O campo Subtitle é obrigatório.',
            'subtitle.min'=>'O mínimo de caracteres no Subtitle é :min caracteres.',
            'subtitle.max'=>'O máximo de caracteres no Subtitle é :max caracteres.',
        ];
    }
}
