<?php

namespace App\Http\Requests\API;

use App\Models\Folder;
use InfyOm\Generator\Request\APIRequest;

class MoveFileToFolderAPIRequest extends APIRequest
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
            'file_id' => 'required|exists:file,id',
            'from_folder_id' => 'required|exists:folders,id',
            'to_folder_id' => 'required|exists:folders,id',
        ];
    }
}
