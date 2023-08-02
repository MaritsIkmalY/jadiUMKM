<?php

namespace App\Http\Requests\Edukasi\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class WebinarRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'photo' => 'mimes:png,jpg,jpeg',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ];
    }
}
