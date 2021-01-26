<?php

namespace App\Http\Requests\API;

use App\Models\File;
use InfyOm\Generator\Request\APIRequest;

class UpdateFileAPIRequest extends APIRequest
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

        $rules = [];
        if (!empty($this->file('file'))) {
            $rules['file'] = 'file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip|max:2048';
            //$rules['file'] = 'file';
        }
        $otherRules = [
            'name' => 'required|string|max:255',
            'is_favourite' => 'nullable|boolean',
            'is_lock' => 'nullable|boolean',
            'folder_id' => 'required|exists:folders,id',
        ];
        return array_merge($rules, $otherRules);
    }
}
