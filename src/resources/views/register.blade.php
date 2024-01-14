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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Fashionably Late</h1>
        </div>
        <div class="header__inner-item">
            <nav class="header__inner-nav">
                <ul>
                    <li><a href="/login">login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="main__title">
            <h2 class="">Register</h2>
        </div>
        <form class="register-form" action="/register" method="post">
        @csrf
        <div class="register-box">
            <div class="register-form__group">
                <div class="register-form__group-item">
                    <span>お名前</span>
                    <div class="register-form__input">
                        <input class="register-form__input-name" type="text" name="name" placeholder="例：山田　太郎" value="{{ old('name') }}">
                    </div>
                    <div class="register-form__error">
                    @error ('name')
                        {{ $message }}
                    @enderror<!--バリデーション後-->
                    </div>
                </div>
                <div class="register-form__group-item">
                    <span>メールアドレス</span>
                    <div class="register-form__input">
                        <input class="register-form__input-email" type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="register-form__error">
                    @error ('email2')
                        {{ $message }}
                    @enderror<!--バリデーション後-->
                    </div>
                </div>
                <div class="register-form__group-item">
                    <span>パスワード</span>
                    <div class="register-form__input">
                        <input class="register-form__input-password" type="password" name="password" placeholder="例：coachtech1106" value="{{ old('password') }}">
                    </div>
                    <div class="register-form__error">
                    @error ('password')
                        {{ $message }}
                    @enderror<!--バリデーション後-->
                    </div>
                </div>
                <div class="register-form__button">
                <button class="register-form__button-submit">登録</button>
                </div>
            </div>
        </div>
        </form>
    </main>
</body>
</html>