<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Bonjour,</p>

    <p>Vous avez un mail de la part de {{ $name }}</p>
    <p>Lisez le ici :</p>
    <p><a href="http://localhost:8000/mail/{{ $key }}">http://localhost:8000/mail/{{ $key }}</a></p>

    <p>cimer.</p>
</body>

</html>
