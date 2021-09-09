<?php

namespace App\Http\Requests\API;

use App\Models\Poll;
use InfyOm\Generator\Request\APIRequest;

class CreatePollAPIRequest extends APIRequest
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
            'title' => 'required|string|max:255',
            //'url' => 'nullable|string|max:255',
            'options.A' => 'nullable|string|max:255',
            'options.B' => 'nullable|string|max:255',
            'options.C' => 'nullable|string|max:255',
            'options.D' => 'nullable|string|max:255',
            'options.E' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'category_id' => 'required|integer',
            'user_id' => 'nullable|integer',
            'poll_type_id' => 'required|integer',
            'open_to_everyone' => 'required',
            'question' => 'required|string',
            'uuid' => 'nullable',
            'close_date' => 'nullable',
        ];
    }
}
