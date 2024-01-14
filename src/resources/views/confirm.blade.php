@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('main-title')
Confirm
@endsection

@section('content')
<form class="confirm-form" action="/contact" method="post">
@csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__head">お名前</th>
                <td class="confirm-table__text">
                    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                    <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">性別</th>
                <td class="confirm-table__text">
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly>
                    <div class="confirm-table__gender"><?php
                    if ($contact['gender'] == '1') {echo '男性';} else if ($contact['gender'] == '2') {echo '女性';} else if ($contact['gender'] == '3') {echo 'その他';} ?></div>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__head">メールアドレス</th>
                <td class="confirm-table__text">
                    <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">電話番号</th>
                <td class="confirm-table__text">
                    <input type="tel" name="tel" value="{{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">住所</th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">建物名</th>
                <td class="confirm-table__text">
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">お問い合わせの種類</th>
                <td class="confirm-table__text">
                    <input type="text" name="category_id" value="{{ $contact['category_id'] }}" readonly>
                    <div class="confirm-table__category_id"><?php
                    if ($contact['category_id'] == '1') {echo '商品のお届けについて';} else if ($contact['category_id'] == '2') {echo '商品の交換につい';} else if ($contact['category_id'] == '3') {echo '商品トラブル';} else if ($contact['category_id'] == '4') {echo 'ショップへのお問い合わせ';}else if ($contact['category_id'] == '5') {echo 'その他';}?></div>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__head">お問い合わせ内容</th>
                <td class="confirm-table__text">
                    <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
                    
                </td>
            </tr>
        </table>
    </div>
    <div class="confirm__button">
        <div class="confirm__button-item">
            <button class="confirm-form__button-submit">送信</button>
        </div>
        <div class="confirm__retouch">
            <a class="confirm__retouch-button" href="/">修正
            </a>
        </div>
    </div>

</form>

@endsection