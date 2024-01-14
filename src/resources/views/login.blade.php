<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Fashionably Late</h1>
        </div>
        <div class="header__inner-item">
            <nav class="header__inner-nav">
                <ul>
                    <li><a href="/register">register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="main__title">
            <h2 class="">Login</h2>
        </div>
        <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-box">
            <div class="login-form__group">
                <div class="login-form__group-item">
                    <span>メールアドレス</span>
                    <div class="login-form__input">
                        <input class="login-form__input-email" type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="login-form__error">
                    @error ('email2')
                        {{ $message }}
                    @enderror<!--バリデーション後-->
                    </div>
                </div>
                <div class="login-form__group-password">
                    <span>パスワード</span>
                    <div class="login-form__input">
                        <input class="login-form__input-password" type="password" name="password"  placeholder="例：coachtech1106" value="{{ old('password') }}">
                    </div>
                    <div class="login-form__error">
                    @error ('password')
                        {{ $message }}
                    @enderror<!--バリデーション後-->
                    </div>
                </div>
                <div class="login-form__button">
                <button class="login-form__button-submit">ログイン</button>
                </div>
            </div>
        </div>
        </form>
    </main>
</body>
</html>