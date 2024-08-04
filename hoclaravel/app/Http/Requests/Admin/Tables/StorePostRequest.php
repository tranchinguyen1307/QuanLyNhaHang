<?php

namespace App\Http\Requests\Admin\Tables;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'guest_count' => 'required|integer',
            'reservation_time' => 'required|date',
            'status' => 'required|string',
            'deposit' => 'required|numeric|min:0',

        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Tên khách là bắt buộc.',
            'customer_name.string' => 'Tên khách phải là một chuỗi ký tự.',
            'customer_name.max' => 'Tên khách không được vượt quá 255 ký tự.',
            'customer_email.required' => 'Email là bắt buộc.',
            'customer_email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'customer_phone.required' => 'Số điện thoại là bắt buộc.',
            'customer_phone.string' => 'Số điện thoại phải là một chuỗi ký tự.',
            'guest_count.required' => 'Số người là bắt buộc.',
            'guest_count.integer' => 'Số người phải là một số nguyên.',
            'reservation_time.required' => 'Ngày giờ là bắt buộc.',
            'reservation_time.date' => 'Ngày giờ phải là một ngày hợp lệ.',
            'status.required' => 'Trạng thái là bắt buộc.',
            'status.string' => 'Trạng thái phải là một chuỗi ký tự.',
            'deposit.required' => 'Tiền đã cọc là bắt buộc.',
            'deposit.numeric' => 'Tiền đã cọc phải là một số.',
            'deposit.min' => 'Tiền đã cọc không được nhỏ hơn 0.',
        ];
    }
}
