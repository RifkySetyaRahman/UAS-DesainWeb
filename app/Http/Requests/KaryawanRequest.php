<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
{
    public function authorize()
    {
        // Set to true if authorization is not required
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:karyawans,email,' . $this->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:1000',
            'departemens_id' => 'required|exists:departemens,id',
            'posisis_id' => 'required|exists:posisis,id',
            'hire_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama karyawan wajib diisi.',
            'name.string' => 'Nama karyawan harus berupa teks.',
            'name.max' => 'Nama karyawan tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email sudah terdaftar.',
            'phone.string' => 'Nomor telepon harus berupa teks.',
            'phone.max' => 'Nomor telepon tidak boleh lebih dari 15 karakter.',
            'address.string' => 'Alamat harus berupa teks.',
            'address.max' => 'Alamat tidak boleh lebih dari 1000 karakter.',
            'departemens_id.required' => 'Departemen wajib dipilih.',
            'departemens_id.exists' => 'Departemen yang dipilih tidak valid.',
            'posisis_id.required' => 'Posisi wajib dipilih.',
            'posisis_id.exists' => 'Posisi yang dipilih tidak valid.',
            'hire_date.required' => 'Tanggal bergabung wajib diisi.',
            'hire_date.date' => 'Tanggal bergabung tidak valid.',
        ];
    }
}
