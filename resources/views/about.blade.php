<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <h3>My name is {{ $name }} {{ $surname }}</h3>
        <h3>My email address is {{ $mail }}</h3>
    </div>

    <div>
        @foreach($links as $key_url => $url)
            <a href="{{ $url }}">{{ $key_url }}</a>
        @endforeach
    </div>

</body>
</html>