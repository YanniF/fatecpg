<?php

namespace FatecPG\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
       switch($this->method()) {//cada método vai ter regras diferentes
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'imagem' => 'required|image',
                    'link'  => 'required|string',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'imagem' => 'image',
                    'link'  => 'required|string',
                ];
            }
            default: break;
        }
    }
}
