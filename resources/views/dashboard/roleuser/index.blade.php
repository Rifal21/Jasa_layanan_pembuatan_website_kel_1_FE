@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Role Users</h1>
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
    <a href="/dashboard/roleuser/create" class="btn btn-primary mb-3">Create New Role</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name Role</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roleusers as $role)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $role['name_role'] }}</td>
            <td>
              {{-- <a href="/dashboard/roleuser/{{ $role['id'] }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a> --}}

              <a href="/dashboard/roleuser/{{ $role['id'] }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>

              <form action="{{ route('roleuser.destroy', $role['id']) }}" method="POST" class="d-inline">
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