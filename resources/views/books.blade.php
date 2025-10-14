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
        @foreach ($books as $book)
            <li>
                <strong>
                    {{ $book['title'] }}
                </strong>
                <p>
                    {{ $book['cover_photo'] }}
                </p>
                <p>
                    {{ $book['description'] }}
                </p>
                <p>
                    Harga : {{ $book['price'] }}
                </p>
                <p>
                    Stok : {{ $book['stock'] }}
                </p>
                <p>
                    Genre : {{ $book->genre->name }}
                </p>
                <p>
                    Author : {{ $book->author->name }}
                </p>
            </li>
        @endforeach
    </ol>
</body>

</html>
