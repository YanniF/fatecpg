<?php

namespace FatecPG\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerguntasFrequentesRequest extends FormRequest
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
            'pergunta' => 'required|string|max:255',
            'resposta'  => 'required|string',
            'categoria'    => 'required|string|max:50',
        ];
    }
}
