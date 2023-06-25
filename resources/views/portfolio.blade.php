@extends('layouts.main')
@section('container')
    <div class="row">
      <div class="col">
        <h1 class="text-center text-light mb-5">Portofolio</h1>
        <div class="container bg-light"> 
          <div class="row justify-content-center">
            <h3 class="mb-3 pt-5" style="color: #3EB772"><i class="bi bi-arrow-right-square"></i> Portofolio Perusahaan Kami</h3>
            @foreach ($portofolios as $item)
            <div class="col-md-4 mb-5">
              <a href="#pilih" class="text-decoration-none" style="color: #3EB772">
                <div class="card rounded border-success bg-transparent">
                  <img src="/img/ly5.png" class="card-img-top mx-auto" alt="..." style="width: 181px">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-4">{{ $item->judul }}</h5>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
          </div>
          {{-- <div class="row justify-content-center">
            <h3 id="pilih" class="mb-3 pt-5" style="color: #3EB772"><i class="bi bi-arrow-right-square"></i> Pilih layanan website yang tersedia</h3>
            <div class="col-md-4 mb-5">
              <a href="/layanandet" class="text-decoration-none" style="color: #3EB772">
                <div class="card rounded border-success bg-transparent">
                  <img src="/img/ly3.png" class="card-img-top mx-auto" alt="..." style="width: 181px">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-4">Murah</h5>
                    <p class="card-text">Webiste berlangganan tanpa pengoperasian</p>
                    <p class="card-text fw-semibold fs-5">Mulai dari Rp 500k/thn</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mb-5">
              <a href="/layanandet" class="text-decoration-none" style="color: #3EB772">
                <div class="card rounded border-success bg-transparent">
                  <img src="/img/ly2.png" class="card-img-top mx-auto" alt="..." style="width: 181px">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-4">Meriah</h5>
                    <p class="card-text">Webiste berlangganan dengan pengoperasian</p>
                    <p class="card-text fw-semibold fs-5">Mulai dari Rp 1,5juta/thn</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mb-5">
              <a href="/layanandet" class="text-decoration-none" style="color: #3EB772">
                <div class="card rounded border-success bg-transparent">
                  <img src="/img/ly1.png" class="card-img-top mx-auto" alt="..." style="width: 181px">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold fs-4">Megah</h5>
                    <p class="card-text">Pembelian webiste tanpa berlangganan</p>
                    <p class="card-text fw-semibold fs-5">Mulai dari Rp 2juta/thn</p>
                  </div>
                </div>
              </a>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
@endsection