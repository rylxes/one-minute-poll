<?php

namespace App\Http\Requests\API;

use App\Models\Library;
use InfyOm\Generator\Request\APIRequest;

class CreateLibraryAPIRequest extends APIRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'password' => 'nullable|string',
            'is_encrypted' => 'required|boolean',
            'is_favourite' => 'required|boolean',
        ];
    }
}
