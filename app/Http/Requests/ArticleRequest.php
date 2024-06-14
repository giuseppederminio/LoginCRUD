<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title.required'=>'required|min:5',
            'body.required',
        ];
    }

    public function messages(){
        return[
            'title.required'=>'Title is required',
            'body.required'=>'Body is required',
            'title.min'=>'the title is too small',
            
        ];
    }
}
