@extends('layout.main')

@section('container')

    <main class="form-registration w-100 m-auto">
 
    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
    <form action="{{route('register.store')}}" method="post"> 
    @csrf
    <div class="form-floating">
      <input type="number" class="form-control rounded-top" name="nik" Placeholder="NIK">
      <label for="nik">NIK</label>
    </div>
    <div class="form-floating">
      <input type="text" name="nama" class="form-control" name="nama" Placeholder="Nama">
      <label for="nama">Nama</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="gender" Placeholder="Gender">
      <label for="gender">Gender</label>
    </div>
    <div class="form-floating">
      <input type="alamat" class="form-control rounded-bottom" name="alamat" Placeholder="Alamat">
      <label for="alamat">Alamat</label>
    </div>

    <input value="Sing Up" class="btn btn-primary w-100 py-2 mt-4" type="submit">
  </form>
  <small class="d-block text-center mt-3">Already registered? <a href="{{route('login')}}">Login</a></small>
</main>
@endsection