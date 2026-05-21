<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'kakeibo App')</title>
</head>
<body>
    <header>
        <h1>家計簿アプリ</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 kakeibo App</p>
    </footer>
</body>
</html>
