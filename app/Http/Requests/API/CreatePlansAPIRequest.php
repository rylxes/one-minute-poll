<?php

namespace App\Http\Requests\API;

use App\Models\Plans;
use InfyOm\Generator\Request\APIRequest;

class CreatePlansAPIRequest extends APIRequest
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
        $plan = new Plans();
        return $plan->getRules();
    }
}
