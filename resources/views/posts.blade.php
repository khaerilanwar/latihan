@extends('layouts.template')

@section('content')
    <h1 class="text-center">Halaman Posts</h1>

    <div class="container">
        @foreach ($posts as $post)
            <h1 class="mb-3">
                <a href="/posts/{{ Str::slug($post->slug) }}">{{ $post['title'] }}</a>
            </h1>
            <p>{{ $post['excerpt'] }}</p>
        @endforeach
    </div>
@endsection
