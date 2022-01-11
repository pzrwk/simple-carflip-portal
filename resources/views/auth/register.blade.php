@extends('layouts.app')
@section('content')
<div class="container-fluid w-25 bg-light p-4 mt-4">
  <h3 class="text-center">Register</h3>
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name')border border-danger @enderror" id="name" name="name" value="{{ old('name') }}">

      @error('name')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="surname" class="form-label">Surname</label>
      <input type="text" class="form-control @error('surname')border border-danger @enderror" id="surname" name="surname" value="{{ old('surname') }}"">

      @error('surname')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control @error('username')border border-danger @enderror" id="username" name="username" value="{{ old('username') }}"">

      @error('username')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

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

      <p class="text-secondary">Password must have at least 8 characters</p>
      @error('password')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm password</label>
      <input type="password" class="form-control @error('password_confirmation')border border-danger @enderror" id="password_confirmation" name="password_confirmation" value="">

      @error('password_confirmation')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    
    <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Submit</button>
  </form>
</div>
@endsection