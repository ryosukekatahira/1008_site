<?php

namespace App\Http\Requests\Usr;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true; // 全てのユーザーにリクエストを許可
    }

    public function rules()
    {
        return [
            'mail' => 'required|email', // メールアドレス
            'pass' => 'required|string|min:8|max:16|regex:/^(?=.*[A-Z])[A-Za-z0-9]+$/', // パスワード
        ];
    }

    public function messages()
    {
        return [
            'mail.required' => 'メールアドレスは必須です。',
            'mail.email' => '有効なメールアドレスを入力してください。',
            'pass.required' => 'パスワードは必須です。',
            'pass.string' => 'パスワードが正しくありません。',
            'pass.min' => 'パスワードは8文字以上である必要があります。',
            'pass.max' => 'パスワードは16文字以下である必要があります。',
            'pass.regex' => 'パスワードは大文字を1文字以上含む英数字で入力してください。',
        ];
    }

    public function attributes()
    {
        return [
            'mail' => 'メールアドレス',
            'pass' => 'パスワード',
        ];
    }
}


