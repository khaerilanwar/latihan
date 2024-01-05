@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-signin w-100 m-auto">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 class="h3 mb-3 fw-normal text-center">Silakan Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            name="email" id="email" placeholder="name@example.com" required autofocus>
                        <label for="email">Alamat Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password"
                            class="form-control @error('password')
                            is-invalid
                        @enderror"
                            name="password" id="password" placeholder="Password" required>
                        <label for="password">Kata Sandi</label>
                        @error('password')
                            <div class="invalid-feedback">
                                $message
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>

                </form>
                <p class="text-center mt-3">Don't have an account ? <a href="/register"
                        class="text-decoration-none">Register
                        Now!</a></p>
            </main>
        </div>
    </div>
@endsection
