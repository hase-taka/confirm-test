@extends('layouts.app2')

@section('title')
Admin
@endsection

@section('content')
<main>
  <div class="container">
    <div class="mx-auto">
      <!--検索フォーム-->
      <div class="row">
        <div class="col-sm">
          <form method="post" action="/admin">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">商品名</label>
              <!--入力-->
              <div class="col-sm-5">
                <input type="text" class="form-control" name="searchWord" value="{{ old('searchWord')}}">
              </div>
              <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary ">検索</button>
              </div>
            </div>     
            <!--プルダウンカテゴリ選択-->
            <div class="form-group row">
              <label class="col-sm-2">商品カテゴリ</label>
              <div class="col-sm-3">
                <input class="create-form__item-input" type="text" name="content" value="{{ old('content') }}">
                <select class="create-form__item-select" name="category_id">
                @foreach ($categories as $category)
                <option value="">未選択</option>
                <option value="{{ $category->id }}">{{ $category->content }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>


<!-- エクスポートボタン -->
<button>エクスポート</button>

<!-- ページネーションボタン -->
{{ $contacts->links() }}

<!-- 一覧table -->
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
@endsection