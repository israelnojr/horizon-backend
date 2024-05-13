<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExternalBankAccountRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|string',
            'bankId' => 'required|string',
            'accountId' => 'required|string',
            'accessToken' => 'required|string',
            'fundingSourceUrl' => 'required|string',
            'shareableId' => 'required|string',
        ];
    }
}
