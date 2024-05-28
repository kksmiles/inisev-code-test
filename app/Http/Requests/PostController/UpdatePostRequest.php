<?php

namespace App\Http\Requests\PostController;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'string|max:255',
            'description' => 'string',
        ];
    }

    public function bodyParameters()
    {
        return [
            'title' => [
                'description' => 'The title of the post',
                'example' => 'My First Post',
            ],
            'description' => [
                'description' => 'The description of the post',
                'example' => 'This is my first post. I hope you like it!',
            ],
        ];
    }
}
