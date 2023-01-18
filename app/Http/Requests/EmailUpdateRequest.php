<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailUpdateRequest extends FormRequest
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
            'Email' => ['required', 'string'],
            'SurveyId' => ['required', 'integer'],
            'ClientId' => ['required', 'integer'],
            'EmployeeType' => ['required', 'integer'],
            'AddedBy' => ['required', 'integer'],
        ];
    }
}
