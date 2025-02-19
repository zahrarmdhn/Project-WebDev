<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {               
        return [
            'isbn' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255', 'unique:books,title,' . $this->route('book')->id],
            'author' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }  


    public function attributes() {
        return [
            'isbn' => 'book ISBN',
            'title' => 'book title',
            'author' => 'book author',
            'category_id' => 'book category',
        ];
    }
}
