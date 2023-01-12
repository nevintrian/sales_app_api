<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'shop_id' => 'required|integer|exists:shops,id',
            'invoice_number' => 'required|string',
            'total_price' => 'required|integer|gte:0',
            'tax' => 'required|boolean',
            'status' => 'required|boolean'
        ];
    }
}
