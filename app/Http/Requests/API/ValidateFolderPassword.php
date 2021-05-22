<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFolderPassword extends FormRequest
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
            'password' => 'required|min:8',
            'folder_id' => 'required|exists:folders,id',
        ];
    }
}
