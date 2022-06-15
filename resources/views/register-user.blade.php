@extends('mainLayout.main')
@section('index','active')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4 shadow p-5 bg-light mb-5" id="register">
        <main class="form-registration">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Register <strong>User</strong></h2>
            <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
            <form action="/registeruser" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="level" name="level" value="user">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="level" class="form-control @error('level') is-invalid @enderror" name="level" id="level" placeholder="Level" required value="{{ old('level') }}">
                    @error('level')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Register</button>
                <small class="d-block mt-2"><a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>
<style>
    .form-group {
        margin-bottom: 10px;
    }

    label {
        margin-bottom: 5px;
    }
</style>
@endsection