@extends('layouts.auth')

@section('content')

<div class="container vh-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-5">

            <div class="card shadow login-card">
                <div class="card-body p-5">

                    <h2 class="text-center fw-bold mb-2">
                        Selamat Datang
                    </h2>

                    <p class="text-center text-muted mb-4">
                        Silakan masuk ke akun Anda
                    </p>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">
                                Login Sebagai
                            </label>

                            <select name="role" class="form-select" required>
                                <option value="admin">Admin</option>
                                <option value="resepsionis">Resepsionis</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Username
                            </label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan Username"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan Password"
                                required>
                        </div>

                        <div class="mb-3 form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember">

                            <label class="form-check-label" for="remember">
                                Ingat Saya
                            </label>
                        </div>

                        <button type="submit" class="btn btn-login w-100">
                            Masuk
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
