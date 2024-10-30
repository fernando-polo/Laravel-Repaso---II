<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroLibros extends FormRequest
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
            'txtISBN' => 'required | min:13 | numeric',
            'txtTitulo' => 'required | max:150',
            'txtAutor' => 'required',
            'txtPaginas' => 'required | integer | min:1',
            'txtAño' => 'required | integer | digits:4 | min:1000 | max: 2024',
            'txtEditorial' => 'required',
            'txtEmail' => 'required | email:rfc,dns'
        ];
    }
}
