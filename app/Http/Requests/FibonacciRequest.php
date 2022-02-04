<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FibonacciRequest extends FormRequest
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
        return ['fibonacci_size' => ['required', 'numeric', 'gt:0']];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fibonacci_size.required' => 'La longueur est requise',
            'fibonacci_size.numeric' => 'La valeur doit être un nombre',
            'fibonacci_size.gt' => 'La valeur doit être positive',
        ];

    }
}
