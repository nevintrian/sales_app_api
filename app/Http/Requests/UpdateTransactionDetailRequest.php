<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionDetailRequest extends FormRequest
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
            'transaction_id' => 'required|integer|exists:transactions,id',
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|gt:0',
            'discount_first' => 'required|integer|gte:0',
            'discount_second' => 'required|integer|gte:0',
            'subtotal' => 'required|integer|gte:0'
        ];
    }
}
