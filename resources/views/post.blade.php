{{-- @dd($title) --}}

@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <h5 class="mb-3">By: <a href="/posts?a={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/posts?c={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>


                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid"
                    alt="{{ $post->category->name }}">
                {{-- Menghilangkan fungsi htmlspecialchars --}}
                {{-- Karena jika tidak menggunakan tanda ! maka otomatis menjalankan fungsi htmlspecialchars --}}
                <article class="my-3">
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/posts">Kembali ke Posts</a>
            </div>
        </div>
    </div>
@endsection
