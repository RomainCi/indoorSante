<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFormulaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            "firstname" => 'required|max:55|string',
            "lastname" => 'required|max:55|string',
            "email" => 'required|email',
            "occupation" => 'nullable|string',
            "phone" => 'required|digits:10',
            'content' => 'required|string',
            "check" => ['required', Rule::in(true)],
        ];
    }
}
