@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Portfolio</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ route('portfolio.store') }}" class="mb-5" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="judul" class="form-label @error('judul') is-invalid @enderror">Judul</label>
    <input type="text" name="judul" class="form-control" id="judul" required autofocus value="{{ old('judul') }}">
    @error('judul')
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
    <input class="form-control" type="text" id="gambar" name="gambar" onchange="previewImage()">
    @error('gambar')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi Portfolio</label>
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