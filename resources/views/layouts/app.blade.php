<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <h1 class="title">@yield('title')</h1>
    <nav>
        <a href="/">Главная</a>
        <a href="/about">О нас</a>
        <a href="/contacts">Контакты</a>
        <a href="/services">Услуги</a>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    &copy; {{ date('Y') }} First Laravel App
</footer>
</body>
</html>
