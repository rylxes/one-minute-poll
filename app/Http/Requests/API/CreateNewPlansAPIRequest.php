<?php

namespace App\Http\Requests\API;

use App\Models\Plans;
use InfyOm\Generator\Request\APIRequest;

class CreateNewPlansAPIRequest extends APIRequest
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
            'slug' => 'required|alpha_dash|max:150|unique:'.config('rinvex.subscriptions.tables.plans').',slug',
            'name' => 'required|string|strip_tags|max:150',
            'price' => 'required|numeric',
            'invoice_period' => 'sometimes|integer|max:100000',
            'invoice_interval' => 'sometimes|in:hour,day,week,month',
            'active_subscribers_limit' => 'nullable|integer|max:100000',
        ];
    }
}
