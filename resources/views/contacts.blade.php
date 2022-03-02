<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Contacts</title>
</head>
<body>

    <div class="flex">

        <div class="contacts">
            @foreach($parents as $value)
                <div> {{ $value }}</div>
            @endforeach
        </div>
        
        <div>
            @foreach($links as $key_url => $url)
                <a href="{{ $url }}">{{ $key_url }}</a>
            @endforeach
        </div>
        
    </div>

</body>
</html>