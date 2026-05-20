<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
</head>
<body>
    <h1>こんにちは、Laravel</h1>
    <p><a href="{{ route('hello.show', ['name' => 'タロウ']) }}">タロウさんに挨拶</a></p>
</body>
</html>
