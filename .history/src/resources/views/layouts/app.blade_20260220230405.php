<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flea-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header>
        <div class="header">
            <div class="header-inner">
                <a href="/"><img src="../img/logo.png" alt="COACHTECHヘッダーロゴ" class="header-logo"></a>
            </div>
            <form class="header-form">
                <div class="header-input">
                    <input type="search" class="header-inpu-search" placeholder="なにをお探しですか？">
                </div>
            </form>
            <nav class="nav">
                <ul class="nav-list">
                    @if (Auth::check())
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="button">ログアウト</button>
                        </form>
                    </li>
                    <li>
                        <div class="header">
                            <a href="{{ route('mypage') }}" class="header-a">マイページ</a>
                        </div>
                    </li>
                    <li>
                        <form action="/sell" method="get" type="button">
                            <button class="button-sell" method="get">出品</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>