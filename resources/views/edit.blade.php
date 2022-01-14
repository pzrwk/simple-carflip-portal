@extends('layouts.app')
@section('content')
<div class="container-fluid w-50 bg-light p-4 mt-4">
  <h3 class="text-center">Edit your advertisement</h3>
  <form action="{{ route('update', $advertisement) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title')border border-danger @enderror" id="title" name="title" value="{{ $advertisement->title }}">

      @error('email')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select @error('category')border border-danger @enderror" id="category" name="category" value="{{ $advertisement->category }}">
        <option>No category selected</option>
        <option value="Cars" @if( $advertisement->category == 'Cars') selected="selected"@endif>Cars</option>
        <option value="Tractors" @if( $advertisement->category == 'Tractors') selected="selected"@endif>Tractors</option>
        <option value="Trucks" @if( $advertisement->category == 'Trucks') selected="selected"@endif>Trucks</option>
        <option value="Electronics" @if( $advertisement->category == 'Electronics') selected="selected"@endif>Electronics</option>
        <option value="Pets" @if( $advertisement->category == 'Pets') selected="selected"@endif>Pets</option>
      </select>

      @error('category')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3 form-group">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control @error('description')border border-danger @enderror" id="description" name="description" rows="10" value="">{{ $advertisement->description }}</textarea>

      @error('description')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control @error('location')border border-danger @enderror" id="location" name="location" value="{{ $advertisement->location }}">

      @error('location')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control @error('phone')border border-danger @enderror" id="phone" name="phone" value="{{ $advertisement->phone }}">

      @error('phone')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="img" class="form-label">Img</label>
      <input type="text" class="form-control @error('img')border border-danger @enderror" id="img" name="img" value="{{ $advertisement->img }}">

      @error('img')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control @error('price')border border-danger @enderror" id="price" name="price" value="{{ $advertisement->price }}">

      @error('price')
        <div class="text-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <button class="btn btn-success btn-lg w-100 mt-3">Update</button>
    
  </form>
  <form action="{{ route('delete', $advertisement) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-lg w-100 mt-3">Delete</button>

  </form>
  
</div>
@endsection