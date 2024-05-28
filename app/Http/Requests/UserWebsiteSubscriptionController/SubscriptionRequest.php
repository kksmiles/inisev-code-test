<?php

namespace App\Http\Requests\UserWebsiteSubscriptionController;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'user_email' => ['required', 'email', 'exists:users,email'],
        ];
    }
    public function bodyParameters()
    {
        return [
            'user_email' => [
                'description' => 'The email of the user',
                'example' => 'user@example.com'
            ]
        ];
    }
}
