@extends('layouts.auth')

@section('content')

<div class="container vh-100">

    <div class="row h-100 justify-content-center align-items-center">

        <div class="col-md-5">

            <div class="card shadow login-card">

                <div class="card-body p-5">

                    <h1 class="text-center fw-bold">
                        Selamat Datang
                    </h1>

                    <p class="text-center text-muted">
                        Silakan masuk ke akun Anda.
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
                                Masuk Sebagai
                            </label>

                            <select
                                name="role"
                                class="form-select">

                                <option value="admin">
                                    Admin
                                </option>

                                <option value="supervisor">
                                   Resepsionis
                                </option>

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
                                placeholder="Masukkan username">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password">

                        </div>

                        <div class="d-flex justify-content-between mb-3">

                            <div>
                                <input
                                    type="checkbox"
                                    name="remember">

                                Ingat Saya
                            </div>

                            <a href="#">
                                Lupa Password?
                            </a>

                        </div>

                        <button
                            class="btn btn-login w-100">

                            Masuk

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
