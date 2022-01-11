@extends('layouts.app')
@section('content')
<div class="container-fluid w-25 bg-light p-4 mt-4">
  <h3 class="text-center">Login</h3>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email')border border-danger @enderror" id="email" name="email" value="{{ old('email') }}">

      @error('email')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control @error('password')border border-danger @enderror" id="password" name="password" value="">

      @error('password')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <input type="checkbox" name="remember" id="remember" class="mr-2">
      <label for="remember">Remember me?</label>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Submit</button>
  </form>
</div>
@endsection