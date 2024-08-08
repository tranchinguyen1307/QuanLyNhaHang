<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:15',
            'reservation_time' => 'required|date_format:Y-m-d\TH:i',
            'guest_count' => 'required|integer|min:1',
            'deposit' => 'nullable|integer|min:0',
            'note' => 'nullable|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Tên của bạn là bắt buộc.',
            'customer_email.required' => 'Email của bạn là bắt buộc.',
            'customer_email.email' => 'Email không hợp lệ.',
            'customer_phone.required' => 'Số điện thoại của bạn là bắt buộc.',
            'reservation_time.required' => 'Ngày và giờ đặt là bắt buộc.',
            'reservation_time.date_format' => 'Ngày và giờ phải theo định dạng Y-m-d\TH:i.',
            'guest_count.required' => 'Số người là bắt buộc.',
            'guest_count.integer' => 'Số người phải là số nguyên.',
            'deposit.integer' => 'Tiền đã cọc phải là số nguyên.',
            'note.max' => 'Không được vượt quá 1000 ký tự.',
        ];
    }
}
