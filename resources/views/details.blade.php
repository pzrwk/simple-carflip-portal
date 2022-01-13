@extends('layouts.app')
@section('content')
  <div class="container-fluid bg-white w-75">
    @if ($advertisement->count())
    
      <p>{{ $advertisement->title }}</p>
      <p>{{ $advertisement->category }}</p>
      <p>{{ $advertisement->description }}</p>
      <p>{{ $advertisement->location }}</p>
      <p>{{ $advertisement->phone }}</p>
      <p>{{ $advertisement->price }}</p>
    
    @else
      <p>Brak elementow do wyswietlenia</p>
    @endif
  </div>
@endsection