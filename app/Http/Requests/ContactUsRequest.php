<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'email' => ['required','email'],
            'subject' => ['required','string','min:5','max:20'],
            'phone' => ['required','string','min:11','max:20'],
            'message' => ['required','string' , 'max:255'],
        ];
    }
}
