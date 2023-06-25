@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Template</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ route('template.update', $template->id) }}" class="mb-5" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="mb-3">
    <label for="kode_template" class="form-label @error('kode_template') is-invalid @enderror">Kode Template</label>
    <input type="text" name="kode_template" class="form-control" id="kode_template" required autofocus value="{{ old('kode_template', $template->kode_template) }}">
    @error('kode_template')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nama_template" class="form-label @error('nama_template') is-invalid @enderror">Nama Template</label>
    <input type="text" name="nama_template" class="form-control" id="nama_template" required autofocus value="{{ old('nama_template', $template->nama_template) }}">
    @error('nama_template')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug', $template->slug) }}">
    @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" name="gambar" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" required value="{{ old('gambar', $template->gambar) }}">
    @error('gambar')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi" required value="{{ old('deskripsi', $template->deskripsi) }}">
    @error('deskripsi')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Create Role</button>
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
@endsection