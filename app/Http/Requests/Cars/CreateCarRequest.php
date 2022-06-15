<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'vin'=> 'required|min:3|max:10',
            'color' => ['required', 'min:3', 'max:6']
        ];
    }

    public function messages()
    {
        return [
            'vin.required' => 'Vin jest wymagany'


        ];
    }
}
