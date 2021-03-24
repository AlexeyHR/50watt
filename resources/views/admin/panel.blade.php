<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты СТО - Админка</title>
</head>
<body>
    <div>
        <h1>Клиенты</h1>
    </div>
    <div>
        <ul>
            @foreach($phones as $phone)
                <li><a href="tel:{{ $phone->telnumber }}">{{ $phone->telnumber }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>