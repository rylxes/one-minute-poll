<?php

namespace App\Http\Requests\API;

use App\Models\Profile;
use InfyOm\Generator\Request\APIRequest;

class UpdateProfileAPIRequest extends APIRequest
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
            $rules['file'] = 'file|mimes:jpg,jpeg';
        }
        $otherRules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_id' => 'required|integer',
        ];
        return array_merge($rules, $otherRules);
    }
}
