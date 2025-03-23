<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'category' => 'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'title.required' => 'El campo :attribute es obligatorio',
    //         'title.min' => 'El campo titulo debe tener al menos 5 caracteres',
    //         'title.max' => 'El campo titulo debe tener como maximo 255 caracteres',
    //         'slug.required' => 'El campo slug es obligatorio',
    //         'slug.unique' => 'El campo slug debe ser unico',
    //         'content.required' => 'El campo contenido es obligatorio',
    //         'category.required' => 'El campo categoria es obligatorio'
    //     ];
    // }

    // public function attributes()
    // {
    //     return [
    //         'title' => 'name'
    //     ];
    // }
}
