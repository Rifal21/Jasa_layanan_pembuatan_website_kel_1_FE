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
              <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam, fugit accusantium quia aut temporibus aliquid! Sint, natus porro iste, itaque iusto tempora expedita ut modi vel corporis impedit culpa.</p>
              <a href="#" class="btn btn-warning text-dark fw-bold mb-3">Pesan Sekarang</a>
              <a href="#" class="btn btn-light text-dark fw-bold mb-3">Layanan Kami</a>
          </div>      
            <div class="col">
              <img src="/img/robot.png" class="img-fluid" alt="">
            </div>
        @else   
        <div class="col-md-6 ">
          <h1>Welcome to IMR Website</h1>
          <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam, fugit accusantium quia aut temporibus aliquid! Sint, natus porro iste, itaque iusto tempora expedita ut modi vel corporis impedit culpa.</p>
          <a href="#" class="btn btn-warning text-dark fw-bold mb-3">Pesan Sekarang</a>
          <a href="#" class="btn btn-light text-dark fw-bold mb-3">Layanan Kami</a>
        </div>
        <div class="col">
          <img src="/img/robot.png" class="img-fluid" alt="">
        </div>
        @endauth
    </div>
@endsection