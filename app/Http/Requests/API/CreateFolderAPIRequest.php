<?php

namespace App\Http\Requests\API;

use App\Models\Folder;
use InfyOm\Generator\Request\APIRequest;

class CreateFolderAPIRequest extends APIRequest
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
            'library_id' => 'required|exists:library,id',
            'parent_id' => 'nullable|integer'
        ];
    }
}
