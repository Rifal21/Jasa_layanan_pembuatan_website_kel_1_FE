@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin w-100 m-auto text-center mb-5">       

      <img class="mb-3" src="/img/Citta Nirmala.png" alt="" width="250" >
      <h1 class="h3 mb-5 fw-normal">Registration</h1>
      <form action="/login" method="POST">
        @csrf
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
        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
      </form>
      <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login" class="text-decoration-none">Login</a></small>
    </main> 
  </div> 
</div>
@endsection




