<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'nama_depan'    => 'required|string|max:50',
            'nama_belakang' => 'required|string|max:50',
            'nik'           => 'required|numeric|digits:16',
            'gender'        => 'required',
            'agama'         => 'required',
            'tempat_lahir'  => 'required|string|min:2',
            'tanggal_lahir'     => 'required|date',
            'email'             => 'required|email',
            'nomor_telepon'     => 'required|numeric|digits_between:10,18',
            'tempat_kerja'      => 'required|string|min:5',
            'status_pekerjaan'  => 'required',
        ];
    }
}
