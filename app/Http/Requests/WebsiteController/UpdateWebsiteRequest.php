<?php

namespace App\Http\Requests\WebsiteController;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWebsiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // no authorization required for this coding exercise
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'url' => 'url|max:255',
            'description' => 'string',
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'The name of the website',
                'example' => 'My Website',
            ],
            'url' => [
                'description' => 'The URL of the website',
                'example' => 'https://www.example.com',
            ],
            'description' => [
                'description' => 'The description of the website',
                'example' => 'This is my website. I hope you like it!',
            ],
        ];
    }
}
