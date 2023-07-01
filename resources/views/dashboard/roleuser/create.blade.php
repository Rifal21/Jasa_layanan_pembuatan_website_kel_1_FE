@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Role</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ route('roleuser.store') }}" class="mb-5" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="name_role" class="form-label @error('name_role') is-invalid @enderror">Role</label>
    <input type="text" name="name_role" class="form-control" id="name_role" required autofocus value="{{ old('name_role') }}">
    @error('name_role')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  {{-- <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug') }}">
    @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div> --}}

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