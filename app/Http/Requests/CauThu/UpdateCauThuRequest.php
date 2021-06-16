<?php

namespace App\Http\Requests\CauThu;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCauThuRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tencauthu' => 'required|max:255',
            'tuoi' => 'required',
            'quoctich' => 'required',
            'vitri' => 'required',
            'luong' => 'required',
        ];
    }
}
