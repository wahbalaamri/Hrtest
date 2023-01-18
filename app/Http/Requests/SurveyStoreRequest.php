<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyStoreRequest extends FormRequest
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
            'ClientId' => ['required', 'integer'],
            'PlanId' => ['required', 'integer'],
            'SurveyTitle' => ['required', 'string'],
            'SurveyDes' => ['required', 'string'],
            'SurveyStat' => ['required'],
        ];
    }
}
