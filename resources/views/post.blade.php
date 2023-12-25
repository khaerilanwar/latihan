{{-- @dd($title) --}}

@extends('layouts.template')

@section('content')
    <h1 class="mb-3">{{ $post->title }}</h1>
    {{-- Menghilangkan fungsi htmlspecialchars --}}
    {{-- Karena jika tidak menggunakan tanda ! maka otomatis menjalankan fungsi htmlspecialchars --}}
    <p>{!! $post->body !!}</p>

    <a href="/posts">Kembali ke Posts</a>
@endsection
