<?php

namespace App\Http\Requests\PostController;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'website_id' => 'required|integer|exists:websites,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    public function bodyParameters()
    {
        return [
            'website_id' => [
                'description' => 'The ID of the website to which the post belongs',
                'example' => 1,
            ],
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
