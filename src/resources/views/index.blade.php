@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('main-title')
Contact
@endsection

@section('content')
<form class="contact-form" action="/confirm" method="post">
@csrf
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">お名前</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input class="contact-form__first-name" type="text" name="first_name" placeholder="例：山田" value="{{ old('first_name') }}" >
                <input type="text" name="last_name" placeholder="例：太郎" value="{{ old('last_name') }}" >
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('first_name')
            {{ $message }}
        @enderror<!--バリデーション後-->
        @error ('last_name')
            {{ $message }}
        @enderror<!--バリデーション後-->
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">性別</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input type="radio" name="gender" value="1" checked>
                <span class="input-span">男性</span>
                <input type="radio" name="gender" value="2">
                <span class="input-span">女性</span>
                <input type="radio" name="gender" value="3">
                <span class="input-span">その他</span>
            </div>
        </div>
        <div class="contact-form__error">
            @error ('gender')
                {{ $message }}
            @enderror<!--バリデーション後-->
        </div>
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">メールアドレス</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" >
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('email')
            {{ $message }}
        @enderror<!--バリデーション後-->
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">電話番号</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input class="contact-form__input-tel" type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" ><span class="input-span">-</span>
                <div class="contact-form__error">
                </div>
                <input class="contact-form__input-tel" type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" ><span class="input-span">-</span>
                <div class="contact-form__error">
                </div>
                <input class="contact-form__input-tel" type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" >
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('tel1')
            {{ $message }}
        @enderror
        @error ('tel2')
            {{ $message }}
        @enderror
        @error ('tel3')
            {{ $message }}
        @enderror
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">住所</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1−2−3" value="{{ old('address1') }}" >
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('address')
            {{ $message }}
        @enderror<!--バリデーション後-->
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">建物名</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-text">
                <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('address2') }}" >
            </div>
        </div>
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">お問い合わせの種類</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__select">
                <select name="content" onchange="changeColor(this)" class="contact-form__select-item" required>
                    <option value="">選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('content')
            {{ $message }}
        @enderror<!--バリデーション後-->
    </div>
    <div class="contact-form__group">
        <div class="contact-form__group-title">
            <span class="contact-form__label--item">お問い合わせ内容</span>
            <span class="contact-form__label--required">※</span>
        </div>
        <div class="contact-form__group-content">
            <div class="contact-form__input-textarea">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
        </div>
    </div>
    <div class="contact-form__error">
        @error ('detail')
            {{ $message }}
        @enderror<!--バリデーション後-->
    </div>
    <div class="contact-form__button">
        <button class="contact-form__button-submit">確認画面</button>
    </div>
</form>
@endsection

