<?php

namespace App\Http\Requests\Usr;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\Usr\LoginRepository;
use App\Utils\Util;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    public function __construct(private LoginRepository $loginRepository)
    {  
    }

    public function prepareForValidation()
    {
        $input = $this->all();
        array_walk_recursive($input, Util::class . '::trimValue');
        $this->merge($input);
    }

    public function rules()
    {
        $rules = [];
        $rules['mail'] = ['required', 'email']; // メールアドレス
        $rules['pass'] = ['required', 'min:8', 'max:16', 'regex:/^(?=.*[A-Z])[A-Za-z0-9]+$/']; // パスワード
        
        return $rules;
    }

    public function withValidator($validator)
    {
        $userData = $this->loginRepository->getMatchUser($this->all());
        if (empty($userData)) {
            $validator->errors()->add('msgarea', 'メールアドレスもしくはパスワードが間違っています。');
            throw new HttpResponseException(
                redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
            );
        }
        session()->flash('userData', $userData);
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


