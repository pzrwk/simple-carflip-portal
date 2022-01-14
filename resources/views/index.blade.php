@extends("layouts.app")
<head>
  <title>Advertisements - Buy or sell at car flipper</title>
</head>
@section('content')
  <div class="container-fluid w-75 d-flex flex-column justify-content-center">
    <h1 class="text-center m-4 fw-bold">Advertisements</h1>
  @if ($advertisements->count())
  {{ $advertisements->links() }}
    @foreach ($advertisements as $item)    
      <div class="card mt-4 border-0 bg-white border rounded" style="height: 8rem;">
        <div class="row g-0 h-100">
          <div class="col">
            <div class="card-body">
              <div class="head row d-flex flex-row justify-content-between">
                <h5 class="card-title d-inline col fw-bold"><a href="{{ route('details', $item) }}" style="text-decoration: none; color: black;">{{ $item->title }}</a></h5>
                <span class="ml-auto d-inline col-auto fw-bold">@if($item->price) {{ $item->price }}  zł@else Brak ceny @endif</span>
              </div>
              <p class="card-subtitle">{{ $item->location }}</p>
              <div class="card-text row d-flex flex-row justify-content-between">
                <span class="text-muted d-inline col mt-4">{{ $item->created_at->diffForHumans() }}</span>
                @if (auth()->user() && auth()->user()->id == $item->user_id)
                  @csrf  
                  <span class="d-inline col-auto mt-4"><a style="text-decoration: none;" href="{{ route('display', $item) }}">Edit</a></span>
                @else
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  @else
    <p>There are currently no advertisements available.</p>
  @endif
  </div>
@endsection