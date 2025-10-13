<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
</head>

<body>
    <h1>Hello World!</h1>
    <p>Selamat datang di toko book sales!</p>

    <ol>
        @foreach ($books as $item)
            <li>
                <strong>
                    {{ $item['title'] }}
                </strong>
                <p>
                    {{ $item['cover_photo'] }}
                </p>
                <p>
                    {{ $item['description'] }}
                </p>
                <p>
                    Harga : {{ $item['price'] }}
                </p>
                <p>
                    Stok : {{ $item['stock'] }}
                </p>
            </li>
        @endforeach
    </ol>
</body>

</html>
