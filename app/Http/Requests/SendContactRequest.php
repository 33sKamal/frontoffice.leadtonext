<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'string', 'min:5', 'max:100'],
            "email" => [
                'required',
                'string',
                'min:5',
                'max:100',
                'email:rfc,dns,spoof', // Combine the RFC, DNS, and Spoof checks in the 'email' rule
            ],
            'phone' => [
                'required',
                'string',
                'min:5',
                'max:100',
            ],
            "message" => ['required', 'string', 'min:5', 'max:1000'],
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Please enter a valid email address.',
        ];
    }
}
