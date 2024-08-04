<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:15',
            'guest_count' => 'required|integer|min:1',
            'reservation_time' => 'required|date',
            'status' => 'required|string',
            'deposit' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
            'product_ids' => 'required|array',
            'product_ids.*' => 'exists:products,id',
            'product_prices' => 'required|array',
            'product_prices.*' => 'numeric',
            'product_quantities' => 'required|array',
            'product_quantities.*' => 'integer|min:1',
            'product_totals' => 'required|array',
            'product_totals.*' => 'numeric',
        ];
    }
}
