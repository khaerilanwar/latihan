@extends('dashboard.layouts.main')

@section('content')
    <h2 class="mb-3">Create new post</h2>
    <div class="col-lg-8">
        <form action="/dashboard/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{ old('title') }}" name="title"
                    class="form-control @error('title')
                    is-invalid
                @enderror"
                    id="title">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" value="{{ old('slug') }}" name="slug"
                    class="form-control @error('slug')
                is-invalid
            @enderror" id="slug"
                    readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" value="{{ old('body') }}" name="body">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })
        slug.addEventListener('click', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    </script>
@endsection
