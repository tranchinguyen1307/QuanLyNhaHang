<?php

namespace App\Http\Requests\Admin\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $customerId = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $customerId,
            'phone' => [
                'required',
                'numeric',
                'digits_between:10,11',
                'regex:/^0[1-9][0-9]{8,9}$/',
            ],
            'address' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|max:12',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ và tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã tồn tại.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.numeric' => 'Số điện thoại phải là số.',
            'phone.digits_between' => 'Số điện thoại phải có từ 10 đến 11 chữ số.',
            'phone.regex' => 'Số điện thoại phải bắt đầu bằng 0 và có từ 10 đến 11 chữ số.',
            'phone.max' => 'Số điện thoại là bắt buộc.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.max' => 'Mật khẩu tối đa 12 ký tự.',
        ];
    }
}
