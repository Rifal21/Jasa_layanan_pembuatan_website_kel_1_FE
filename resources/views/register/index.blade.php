@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin w-100 m-auto text-center mb-5">       

      <img class="mb-3" src="" alt="" width="250" >
      <h1 class="h3 mb-5 fw-normal">Registration</h1>
      <form action="/auth/register" method="POST" id="registration-form">
        @csrf
        <div class="form-floating">
          <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" autofocus required value="{{ old('name') }}">
          <label for="name">Nama Lengkap</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
          <label for="Password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Daftar</button>
      </form>
      <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login" class="text-decoration-none text-warning">Login</a></small>
    </main> 
  </div> 
</div>


@endsection




