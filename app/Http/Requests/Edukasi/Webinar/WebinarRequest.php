<?php

namespace App\Http\Requests\Edukasi\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class WebinarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'photo' => 'mimes:pdf,png,jpg,jpeg',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ];
    }
}
