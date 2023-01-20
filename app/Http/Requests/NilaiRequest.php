<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
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
            'nis' => 'string|required|exists:siswa,nis',
            'kd_kompentensi' => 'string|required|exists:matpel,kd_matpel',
            'nilai_p' => 'string|required|',
            'nilai_k' => 'string|required|',
            'semester' => 'string|required|',
            'tapen' => 'number|required|digits:4|min:1900'.(date('Y')+1),
            
        ];
    }

    public function messages()
{
    return [
        "kd_kompentensi.exists" => "data kompentensi tidak ditemukan" 
    ];
}
}
