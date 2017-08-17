<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoterRequest extends FormRequest
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
            'firstname' => 'required|string|min:3',
            'middlename' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'datebirth' => 'required|date',
            'gender' => 'required|string',
            'pollingstation_id' => 'required|numeric',
            'residentialconstituency_id' => 'required|numeric',
            'votingconstituency_id' => 'required|numeric',
            'voterIDnumber' => 'required|numeric|min:9',
            'lifestatus' => 'required|string'
        ];
    }
}
