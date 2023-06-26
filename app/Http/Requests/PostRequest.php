<?php

namespace App\Http\Requests;

use App\Rules\SelectRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|unique:posts,title',
            'category' => [new SelectRule],
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please Don\'t Leave Me !',
            'image.required' => 'Huus! You Forgot Me'
        ];
    }
}
