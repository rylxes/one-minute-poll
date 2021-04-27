<?php

namespace App\Http\Requests\API;

use App\Models\Permissions;
use InfyOm\Generator\Request\APIRequest;

class AssignPermissionsUser extends APIRequest
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
            'user_id' => 'required|exists:users,id',
            'permission_id' => 'required|exists:permissions,id',
        ];
    }
}
