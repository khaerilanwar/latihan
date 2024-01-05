@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registrasi Akun</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('name')
                            is-invalid
                        @enderror"
                            name="name" id="name" placeholder="nama" value="{{ old('name') }}" required>
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('username')
                            is-invalid
                        @enderror"
                            name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="email">Alamat Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control @error('password')
                            is-invalid
                        @enderror"
                            id="password" placeholder="Password" value="{{ old('password') }}" required>
                        <label for="password">Kata Sandi</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password_confirmation" class="form-control" id="confirmPassword"
                            placeholder="Konfirmasi Password" required>
                        <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>

                </form>
                <p class="text-center mt-3">Already account ? <a href="/login" class="text-decoration-none">Login
                        Now!</a></p>
            </main>
        </div>
    </div>
@endsection
