<?php

namespace App\Http\Requests\Usr;

use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\Usr\UserRepository;
use App\Utils\Util;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Unique;

class UserConfirmRequest extends FormRequest
{
    public function __construct(private UserRepository $userRepository)
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
        $rules['last_name'] = ['required', 'string', 'min:1', 'max:10']; // 氏名(性)
        $rules['first_name'] = ['required', 'string', 'min:1', 'max:10']; // 氏名(名)
        $rules['mail'] = ['required', 'email', 'unique:tbl_account,mail']; // メールアドレス
        $rules['pass'] = ['required', 'min:8', 'max:16', 'regex:/^(?=.*[A-Z])[A-Za-z0-9]+$/']; // パスワード
        
        return $rules;
    }

    public function messages()
    {
        return [
            'last_name.required' => '氏名(性)は必須です。',
            'last_name.string' => '氏名(性)が正しくありません。',
            'last_name.max' => '氏名(性)は最大10文字です。',
            'first_name.required' => '氏名(名)は必須です。',
            'first_name.string' => '氏名(名)が正しくありません。',
            'first_name.max' => '氏名(名)は最大10文字です。',
            'mail.required' => 'メールアドレスは必須です。',
            'mail.email' => '有効なメールアドレスを入力してください。',
            'mail.unique' => 'このメールアドレスはすでに使用されています。',
            'pass.required' => 'パスワードは必須です。',
            'pass.min' => 'パスワードは8文字以上である必要があります。',
            'pass.max' => 'パスワードは16文字以下である必要があります。',
            'pass.regex' => 'パスワードは大文字を1文字以上含む英数字で入力してください。',
        ];
    }

    public function attributes()
    {
        return [
            'last_name' => '氏名(性)',
            'first_name' => '氏名(名)',
            'mail' => 'メールアドレス',
            'pass' => 'パスワード',
        ];
    }
}