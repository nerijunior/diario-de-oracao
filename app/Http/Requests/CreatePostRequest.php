<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePostRequest extends Request
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
            'date'            => 'required|date',
            'week_day'        => 'required|int|min:1|max:7',
            'questions'       => 'required',
            'fasting'         => 'required|boolean',
            'fasting_purpose' => 'text',
        ];
    }
}
