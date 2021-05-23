<?php

namespace App\Http\Requests\API;

use App\Models\Permissions;
use InfyOm\Generator\Request\APIRequest;

class AssignPermissionsFolder extends APIRequest
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
            'folder_id' => 'required|exists:folders,id',
            'permission_id' => 'required|exists:permissions,id',
        ];
    }
}
