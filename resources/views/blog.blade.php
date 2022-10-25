

@extends('layout.main')

@section('container')

    @foreach ($posts as $blog)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $blog["slug"] }}">{{   $blog["title"] }}</a>
                </h2>
            <h5>By : {{ $blog["author"] }}</h5>
            <p>{{ $blog["body"] }}</p>
        </article>
    @endforeach

@endsection

