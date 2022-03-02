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
        @foreach($parents as $value)
            <p> {{ $value }}</p>
        @endforeach
    </div>

    <div>
        @foreach($links as $key_url => $value)
            <a href="{{ $value }}">{{ $key_url }}</a>
        @endforeach
    </div>
    
</body>
</html>