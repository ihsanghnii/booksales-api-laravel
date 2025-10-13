<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>

<body>
    <h1>Meet The Authors</h1>
    <h4>the Minds Behind the Books</h4>

    <ol>
        @foreach ($authors as $item)
            <li>
                <strong>
                    {{ $item['name'] }}
                </strong>
            </li>
            <p>{{ $item['photo'] }}</p>
            <p>{{ $item['bio'] }}</p>
        @endforeach
    </ol>

</body>

</html>
