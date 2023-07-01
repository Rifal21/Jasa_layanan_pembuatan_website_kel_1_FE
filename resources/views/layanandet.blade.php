@extends('layouts.main')

@section('container')
<div class="row">
  <div class="col">
    <h1 class="text-center text-light mb-5">Layanan</h1>
    <div class="container bg-light"> 
      <div class="row justify-content-start">
        <h3 class="mb-3 pt-5" style="color: #3EB772"><i class="bi bi-arrow-right-square"></i> Layanan paket yang dipilih</h3>
        <div class="col-lg-12 ps-5">
          <a href="#pilih" class="text-decoration-none " style="color: #3EB772">
            <div class="card mb-3 border-light">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/ly5.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body">
                    <h5 class="card-title fw-bold fs-4">Pembuatan Website</h5>
                    <p class="card-text">Solusi website praktis dan profesional untuk berbagai kebutuhan</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col ps-5">
          <a href="#pilih" class="text-decoration-none " style="color: #3EB772">
            <div class="card mb-3 border-light">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/ly3.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body">
                    <h5 class="card-title fw-bold fs-4">Murah</h5>
                    <p class="card-text">Solusi website praktis dan profesional untuk berbagai kebutuhan</p>
                    <p class="card-text fw-bolder fs-5">Mulai dari Rp 500k/thn</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row justify-content-start">
        <div class="col-md-6 ps-5 mb-5">
          <h5 class="mb-3 pt-5" style="color: #3EB772"><i class="bi bi-coin"></i> Pilih metode pembayaran</h5>
          <form action="" method="">
            <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih bank atau e-wallet</option>
                <option value="1">BNI</option>
                <option value="2">BRI</option>
                <option value="3">DANA</option>
                <option value="3">OVO</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Buat Pesanan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection