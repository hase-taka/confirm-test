<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel1' => ['required', 'numeric', 'digits_between:0,5'],
            'tel2' => ['required', 'numeric', 'digits_between:0,5'],
            'tel3' => ['required', 'numeric', 'digits_between:0,5'],
            'address' => ['required'],
            'content' => ['required'],
            'detail' => ['required', 'max:120'],
        ];
    }

    public function messages(){
        return [
        'first_name.required' => '姓を入力してください',
        'last_name.required' => '名を入力してください',
        'gender.required' => '性別を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスはメース形式で入力して下さい',
        'tel1.required' => '電話番号を入力してください',
        'tel1.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel1.digits_between' => '電話番号は5桁までの数字で入力してください',
        'tel2.required' => '電話番号を入力してください',
        'tel2.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel2.digits_between' => '電話番号は5桁までの数字で入力してください',
        'tel3.required' => '電話番号を入力してください',
        'tel3.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel3.digits_between' => '電話番号は5桁までの数字で入力してください',
        'address.required' => '住所を入力してください',
        'cotent.required' => 'お問い合わせの種類を選択してください',
        'detail.required' => 'お問合せ内容を入力してください',
        'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
