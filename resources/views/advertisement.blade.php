@extends('layouts.app')
@section('content')
<div class="container-fluid w-50 bg-light p-4 mt-4">
  <h3 class="text-center">Create new advertisement</h3>
  <form action="{{ route('advertisement') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title')border border-danger @enderror" id="title" name="title" value="{{ old('title') }}">

      @error('email')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="text" class="form-control @error('category')border border-danger @enderror" id="category" name="category" value="">

      @error('category')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3 form-group">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control @error('description')border border-danger @enderror" id="description" name="description" rows="10" value="{{ old('description') }}"></textarea>

      @error('description')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control @error('location')border border-danger @enderror" id="location" name="location" value="">

      @error('location')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control @error('phone')border border-danger @enderror" id="phone" name="phone" value="">

      @error('phone')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="img" class="form-label">Img</label>
      <input type="text" class="form-control @error('img')border border-danger @enderror" id="img" name="img" value="">

      @error('img')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control @error('price')border border-danger @enderror" id="price" name="price" value="">

      @error('price')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Submit</button>
  </form>
</div>
@endsection