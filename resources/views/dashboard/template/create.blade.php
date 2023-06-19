@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Template</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ route('template.store') }}" class="mb-5" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="kode_template" class="form-label @error('kode_template') is-invalid @enderror">Kode Template</label>
    <input type="text" name="kode_template" class="form-control" id="kode_template" required autofocus value="{{ old('kode_template') }}">
    @error('kode_template')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nama_template" class="form-label @error('nama_template') is-invalid @enderror">Nama Template</label>
    <input type="text" name="nama_template" class="form-control" id="nama_template" required autofocus value="{{ old('nama_template') }}">
    @error('nama_template')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug') }}">
    @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="gambar" class="form-label @error('gambar') is-invalid @enderror">Sample Gambar</label>
    <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
    <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImage()">
    @error('gambar')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi Template</label>
    <input type="text" name="deskripsi" class="form-control" id="deskripsi" required autofocus value="{{ old('deskripsi') }}">
    @error('deskripsi')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Create Template</button>
  </form>
</div>

{{-- <script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
  

</script> --}}
<script>

  function previewImage() {
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) { 
      imgPreview.src = oFREvent.target.result;
    }
  }
  

</script>
@endsection