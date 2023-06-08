<?php

namespace App\Http\Requests\Creator\Portofolio;

use Illuminate\Foundation\Http\FormRequest;

class PortofolioRequest extends FormRequest
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
