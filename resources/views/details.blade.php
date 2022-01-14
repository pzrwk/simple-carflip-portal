@extends('layouts.app')
<head>
  <title>Car Flipper - {{  $advertisement->title }}</title>
</head>
@section('content')
<div class="container-fluid w-75">
  <div class="row mt-5">
      <div class="col-md-6 p-4 d-flex justify-content-center">    
          <img
          src="{{ $advertisement->img }}"
          class="img-fluid rounded"
        />
        
      </div>
      <div class="col-md-6 mt-4"> 
          <small class="text-secondary">Added {{ $advertisement->created_at->toDateString() }}</small> <br>
          <h1>{{$advertisement->title}}</h1>
          <h2 class="fw-bold text-dark">{{ $advertisement->price }} zł</h2>
          <h6>{{ $advertisement->location }} </h6>
          <br>
          <h4 class="fw-bold">Description</h4>
          <p>{{ $advertisement->description }} </p>

          <p class="text-muted">Phone: {{ $advertisement->phone }}</p>
          
      </div>
  </div>
</div>
@endsection