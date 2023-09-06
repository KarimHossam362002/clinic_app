<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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

                    'name' => ['required','string','min:5','max:20'],
                    'city' => ['required','string','min:5','max:20'],
                    'email' => ['required', 'email'],
                    'password' => ['min:5', 'max:20'],
                    'image' => ['mimes:png,jpg,jpeg,gif']
        ];
    }
}
