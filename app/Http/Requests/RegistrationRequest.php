<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'nik'           => 'integer|unique:users,nik',
            'email'         => 'required|email:rfc,dns|unique:users,email',
            'nomor_telepon' => 'required|numeric|unique:users,nomor_telepon',
        ];
    }
}
