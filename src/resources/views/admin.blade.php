@extends('layouts.app2')

@section('title')
Admin
@endsection

@section('content')
<main>
  <div class="admin-body">
    <div class="admin-body__inner">
      <!--検索フォーム-->
      <div class="search-form">
        <form class="search-form__inner" method="post" action="/admin">
          <div class="form-group row">
            <div class="search-form__search-word">
              <input type="text" class="searchWord" name="searchWord" value="{{ old('searchWord')}}" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="search-word__button">
              <button class="search-word__button-submit" type="submit" class="btn btn-primary ">検索</button>
            </div>
          </div>     
          <!--プルダウンカテゴリ選択-->
          <div class="form-group row">
            <div class="search-form__gender">
              <select class="search-form__gender-inner" name="gender">
              <option value="">性別</option>
              @foreach ($contacts as $contact)
              <option value="{{ $contact->gender }}">
                  <?php
                  if ($contact['gender'] == '1') {echo '男性';} else if ($contact['gender'] == '2') {echo '女性';} else if ($contact['gender'] == '3') {echo 'その他';} ?>
              </option>
              @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">
              <select class="create-form__item-select" name="category_id">
              <option value="">お問合せの種類</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->content }}</option>
              @endforeach
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<!-- エクスポートボタン -->
<button>エクスポート</button>

<!-- ページネーションボタン -->
{{ $contacts->links() }}

<!-- 一覧table -->
@if (@isset($item))
<table>
    <thead>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせ種類</th>
            <th>詳細</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->category }}</td>
            <td><button onclick="openModal({{ $contact->id }})">詳細</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection