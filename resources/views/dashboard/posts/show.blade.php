@extends('dashboard.layouts.main')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success">
                    <i class="bi bi-arrow-left"></i> Back to all my posts
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <i class="bi bi-pen"></i> Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apa kamu yakin ?')">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
                </form>

                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x400?' . $post->category->name }}"
                        class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                </div>
                {{-- Menghilangkan fungsi htmlspecialchars --}}
                {{-- Karena jika tidak menggunakan tanda ! maka otomatis menjalankan fungsi htmlspecialchars --}}
                <article class="my-3">
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
