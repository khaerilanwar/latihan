@extends('layouts.template')

@section('content')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="mb-3 row justify-content-center">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('c'))
                    <input type="hidden" name="c" value="{{ request('c') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request('s') }}" placeholder="Search.."
                        name="s">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>By: <a class="text-decoration-none"
                        href="/posts?a={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                    in <a class="text-decoration-none"
                        href="/posts?c={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> <small
                        class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more..</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div style="background-color: rgba(0, 0, 0, .7)" class="position-absolute px-3 py-2 text-white">
                                <a class="text-white text-decoration-none"
                                    href="/posts?c={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>By: <a class="text-decoration-none"
                                        href="/posts?a={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h3 class="text-center">Not Found</h3>
    @endif
@endsection
