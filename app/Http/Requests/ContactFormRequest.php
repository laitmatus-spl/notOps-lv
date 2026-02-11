<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Your name is required.',
            'email.required'   => 'A valid email address is required.',
            'email.email'      => 'Please enter a valid email address.',
            'message.required' => 'Please describe your business challenge.',
            'message.min'      => 'Your message must be at least 10 characters.',
        ];
    }
}
