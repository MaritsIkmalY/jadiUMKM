<?php

namespace App\Http\Requests\Marketplace;

use Illuminate\Foundation\Http\FormRequest;

class NibEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'akte_perusahaan' => ['nullable', 'mimes:png,jpg,jpeg'],
            'ktp' => ['nullable', 'mimes:png,jpg,jpeg'],
            'npwp' => ['nullable', 'mimes:png,jpg,jpeg'],
            'sketsa_lokasi' => 'nullable',
            'email' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',
        ];
    }
}
