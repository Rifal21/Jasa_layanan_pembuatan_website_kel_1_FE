@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin w-100 m-auto text-center mb-5">       

      <img class="mb-3" src="/img/robot .png" alt="" width="250" >
      <h1 class="h3 mb-5 fw-normal">IMR Login</h1>
      @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }} , silahkan login untuk melanjutkan!
      </div>
      @endif
      <form action="" method="POST">
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
        <button class="w-100 btn btn-lg btn-warning text-light" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3 text-light">Belum punya akun? <a href="/register" class="text-decoration-none text-warning fw-bold">Daftar disini</a></small>
    </main> 
  </div> 
</div>
@endsection




