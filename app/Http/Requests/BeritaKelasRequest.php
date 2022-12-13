<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaKelasRequest extends FormRequest
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
            'pamflet' => 'nullable|image|max:2048|mimes:jpg,jpeg,png',
            'judul' => 'required|max:40',
            'deskripsi' => 'required|max:1000'
        ];
    }
}
