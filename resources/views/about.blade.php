@extends('layout.main') {{-- memanggil induk template --}}
@section('container')
    <article>
        <h1>Halaman About</h1>
        <h4>{{ $nama }}</h4>
        <h5> {{ $email }}</h5>
        <img src="{{ $image }}" alt="">
    </article>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <ul>
            <li></li>
        </ul>
    </body>

    </html>
@endsection
