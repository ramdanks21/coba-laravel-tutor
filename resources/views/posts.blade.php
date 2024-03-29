@extends('layout.main') {{-- memanggil induk template --}}

@section('container')
    @foreach ($posts as $post)
        {{-- diambil dari route blog --}}
        <article>
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
