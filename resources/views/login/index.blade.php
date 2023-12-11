@extends('layout.main')

@section('container')

<main class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="number" class="form-control rounded-top" name="nik" Placeholder="NIK">
      <label for="nik">NIK</label>
    </div>
    <div class="form-floating">
      <input type="text" name="nama" class="form-control" name="nama" Placeholder="Nama">
      <label for="nama">Nama</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Sign in</button>
  </form>
  <small class="d-block text-center mt-3">Not Registered? <a href="{{route('register')}}">Register Now!</a></small>
</main>

@endsection