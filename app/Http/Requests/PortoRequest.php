<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'photo' => 'mimes:pdf,png,jpg,jpeg',
            'title' => ['required'],
            'description' => ['nullable'],
        ];
    }
}
