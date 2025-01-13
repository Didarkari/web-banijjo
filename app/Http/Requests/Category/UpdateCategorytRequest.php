<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategorytRequest extends FormRequest
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
        // dd($this->id);
        return [
           
            'name' => 'required|unique:categories|max:255'.$this->id,
            'order' => 'required',
        ];

    }

    public function messages(): array
    {
        return [
            'name.required' => 'Fill up the Category name',
            'order.required' => 'Enter the Order ',
        ];
    }
}
