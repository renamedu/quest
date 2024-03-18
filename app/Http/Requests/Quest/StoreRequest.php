<?php

namespace App\Http\Requests\Quest;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:quests',
            'task' => 'required',
            'creator' => 'required',
            'correct_answer' => 'required',
            'cost' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The field is required',
            'name.unique' => 'This task name already exist',
            'task.required' => 'The field is required',
            'correct_answer.required' => 'The field is required',
        ];
    }
}
