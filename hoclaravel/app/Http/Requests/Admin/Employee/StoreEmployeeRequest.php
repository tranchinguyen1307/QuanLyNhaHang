<?php

namespace App\Http\Requests\Admin\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'salary' => 'required|numeric|min:0', 
            'username' => 'required|string|max:255|unique:employees,username',
            'password' => 'required|string|min:8|max:12', 
            'role_id' => 'required|exists:roles,id',
            'created_at' => 'required|date', 
            'address' => 'required|string|max:255', 
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => [
                'required',
                'numeric',
                'digits_between:10,11',
                'regex:/^0[1-9][0-9]{8,9}$/',
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ và Tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'salary.required' => 'Lương là bắt buộc.',
            'salary.numeric' => 'Lương phải là một số.',
            'salary.min' => 'Lương không thể âm.',
            'username.required' => 'Tên đăng nhập là bắt buộc.',
            'username.unique' => 'Tên đăng nhập đã tồn tại.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.max' => 'Mật khẩu tối đa 12 ký tự.',
            'role_id.required' => 'Chức vụ là bắt buộc.',
            'role_id.exists' => 'Chức vụ không hợp lệ.',
            'created_at.required' => 'Ngày vào làm là bắt buộc.',
            'created_at.date' => 'Ngày vào làm không hợp lệ.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'img.required' => 'Ảnh là bắt buộc.',
            'img.image' => 'Ảnh phải là một tệp hình ảnh.',
            'img.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, gif, svg.',
            'img.max' => 'Ảnh không được lớn hơn 2MB.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.numeric' => 'Số điện thoại phải là số.',
            'phone.digits_between' => 'Số điện thoại phải có từ 10 đến 11 chữ số.',
            'phone.regex' => 'Số điện thoại phải bắt đầu bằng 0 và có từ 10 đến 11 chữ số.',
        ];
    }



    protected function passedValidation()
    {
        $this->handleImage();
    }
    
    protected function handleImage()
    {
        if ($this->hasFile('img')) {
            $file = $this->file('img');
            $employeeName = $this->input('name');
            $normalEmployeeName = $employeeName;
            $normalEmployeeName = preg_replace('/[^A-Za-z0-9_]/', '_', $normalEmployeeName);
            $timestamp = now()->timestamp; 
            $extension = $file->getClientOriginalExtension(); 
            $fileName = "{$normalEmployeeName}_{$timestamp}.{$extension}";
            $filePath = $file->storeAs('public/images/employees', $fileName);
            $this->merge([
                'img' => $fileName,
            ]);
        }
    }
}
