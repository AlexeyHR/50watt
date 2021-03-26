<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="phones">
            <img src="{{ asset('images/phone.png') }}">
            <ul>
                <li><a href="tel:0986693510">098-669-35-10</a></li>
                <li><a href="tel:0996693510">099-669-35-10</a></li>
            </ul>
        </div>
        <!-- <nav>
            <ul class="menu">
                <li><a href="/">Главная</a></li>
                <li><a href="/">Услуги</a></li>
                <li><a href="/">О нас</a></li>
                <li><a href="/">Контакты</a></li>
            </ul>
        </nav> -->
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <div class="client-form">
            <span>Оставьте Ваш номер и мы обязательно перезвоним</span>
            <form action="/" method="post">
                @csrf
                <input type="tel" name="tel" id="tel" placeholder="Введите номер телефона">
                <input type="submit" value="OK">
            </form>
        </div>
        <p>Наш адрес<br>
            <b>Днепр, ул. Казака Мамая 41 (р-н 12 квартал)</b>
        </p>
    </footer>
</body>
</html>