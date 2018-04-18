<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsRequest extends FormRequest
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
            //name,email,password,password_confirmation
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6',
            'password_confirmation'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'昵称不能为空',
            'name.string'=>'请输入正确的昵称',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'请输入正确的邮箱',
            'email.unique'=>'邮箱已存在',
            'password.required'=>'密码不能为空',
            'password.confirmed'=>'两次密码必须一致',
        ];
    }
}
