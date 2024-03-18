<?php

namespace App\Http\Requests\Quest;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
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
            'id' => 'required',
            'correct_answer' => 'required',
            'name' => 'required|string|unique:quest_users,user_id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The field is required',
            'name.unique' => 'You already complete this quest',
            'correct_answer.required' => 'The field is required',
        ];
    }
}
