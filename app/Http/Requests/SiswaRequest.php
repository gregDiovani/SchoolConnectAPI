<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nis' => 'string|required',
            'nama_siswa' => 'string|required|',
            'tempat_lahir' => 'string|required|',
            'tgl_lahir' => 'string|required|',
            'alamat' => 'string|required|',
            'no_telepon' => 'string|required|', 
            'kd_kompentensi' => 'string|required|exists:kompentensi,kd_kompentensi'
        ];
    }

    public function messages()
{
    return [
        "kd_kompentensi.exists" => "data kompentensi tidak ditemukan" 
    ];
}
}
