<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Fashionably Late</h1>
        </div>
    </header>
    <main class="main">
        <div class="main__title">
            <h2 class="">@yield('main-title')</h2>
        </div>
        @yield('content')
    </main>
</body>
</html>