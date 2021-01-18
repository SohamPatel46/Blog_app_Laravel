<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:255',
            'blog_content'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Enter title',
            'title.max' => 'Short',
            'blog_content.required' =>'Enter some content',
        ];
    
    }
}
