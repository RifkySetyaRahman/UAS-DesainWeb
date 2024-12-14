<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PosisiRequest extends FormRequest
{
    public function authorize()
    {
        // Set to true if authorization is not required
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'salary' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nama posisi wajib diisi.',
            'title.string' => 'Nama posisi harus berupa teks.',
            'title.max' => 'Nama posisi tidak boleh lebih dari 255 karakter.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi tidak boleh lebih dari 1000 karakter.',
            'salary.required' => 'Gaji wajib diisi.',
            'salary.numeric' => 'Gaji harus berupa angka.',
            'salary.min' => 'Gaji tidak boleh kurang dari 0.',
        ];
    }
}
