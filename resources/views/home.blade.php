@extends('layouts.main')
@section('container')
    <div class="row justify-content-center d-flex align-items-center">
      @auth
          <div class="col-md-6 ">
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong> Selamat datang kembali {{ auth()->user()->name }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <h1>Welcome to IMR Website</h1>
              <p class="mt-5">Tim IMR menyediakan layanan jasa web yang seo friendly dan mobile friendly, selain jasa pembuatan website profesional kami juga melakukan pemeliharaan berkala yang akan ditangani langsung oleh staf IT berpengalaman. Dengan biaya berlangganan yang terjangkau, anda bisa mendapatkan layanan konsultasi, pembuatan website, pengubahan tampilan, pengelolaan website, dan pemeliharaan server.</p>
              <a href="#" class="btn btn-warning text-dark fw-bold mb-3">Pesan Sekarang</a>
              <a href="#" class="btn btn-light text-dark fw-bold mb-3">Layanan Kami</a>
          </div>      
            <div class="col">
              <img src="/img/robot.png" class="img-fluid" alt="">
            </div>
        @else   
        <div class="col-md-6 ">
          <h1>Welcome to IMR Website</h1>
          <p class="mt-5">Tim IMR menyediakan layanan jasa web yang seo friendly dan mobile friendly, selain jasa pembuatan website profesional kami juga melakukan pemeliharaan berkala yang akan ditangani langsung oleh staf IT berpengalaman. Dengan biaya berlangganan yang terjangkau, anda bisa mendapatkan layanan konsultasi, pembuatan website, pengubahan tampilan, pengelolaan website, dan pemeliharaan server.</p>
          <a href="#" class="btn btn-warning text-dark fw-bold mb-3">Pesan Sekarang</a>
          <a href="#" class="btn btn-light text-dark fw-bold mb-3">Layanan Kami</a>
        </div>
        <div class="col">
          <img src="/img/robot.png" class="img-fluid" alt="">
        </div>
        @endauth
    </div>
@endsection