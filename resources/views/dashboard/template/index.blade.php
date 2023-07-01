@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Template Website</h1>
  </div>

  @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
  @elseif(session()->has('error'))
    <div class="alert alert-danger col-lg-8" role="alert">
      {{ session('error') }}
    </div>
  @endif
  

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/template/create" class="btn btn-primary mb-3">Create Template</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Template</th>
          <th scope="col">Nama Template</th>
          <th scope="col">Gambar</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($templates as $template)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $template['kode_template'] }}</td>
            <td>{{ $template['nama_template'] }}</td>
            {{-- <td>{{ $template['slug'] }}</td> --}}
            <td>{{ $template['gambar'] }}</td>
            <td>{{ $template['deskripsi'] }}</td>
            <td>
              {{-- <a href="/dashboard/roleuser/{{ $role['id'] }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a> --}}

              <a href="/dashboard/template/{{ $template['id'] }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>

              <form action="{{ route('template.destroy', $template['id']) }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection