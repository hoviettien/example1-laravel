<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string|max:255',
            'age'     => 'required|numeric|min:1|max:120',
            'date'    => 'required|date',
            'phone'   => 'required|numeric|min:10',
            'web'     => 'required|url',
            'address' => 'required|string|max:500',
        ];
    }

    /**
     * Thông báo lỗi tùy chỉnh.
     */
    public function messages(): array
    {
        return [
            'name.required'    => 'Họ tên không được để trống.',
            'name.string'      => 'Vui lòng điền tên hợp lệ.',
            'age.required'     => 'Tuổi không được để trống.',
            'age.numeric'      => 'Tuổi phải là số.',
            'age.min'          => 'Tuổi phải lớn hơn 0.',
            'age.max'          => 'Tuổi không hợp lệ.',
            'date.required'    => 'Ngày sinh không được để trống.',
            'date.date'        => 'Vui lòng nhập đúng định dạng ngày.',
            'phone.required'   => 'Số điện thoại không được để trống.',
            'phone.numeric'    => 'Số điện thoại phải là số.',
            'phone.min'        => 'Số điện thoại không hợp lệ.',
            'web.required'     => 'Website không được để trống.',
            'web.url'          => 'Vui lòng nhập đúng định dạng URL.',
            'address.required' => 'Địa chỉ không được để trống.',
            'address.string'   => 'Địa chỉ không hợp lệ.',
            'address.max'      => 'Địa chỉ quá dài.',
        ];
    }
}
