@extends("layouts.app")
@section('content')
  <div class="container-fluid w-75">
  @if ($advertisements->count())
    @foreach ($advertisements as $item)
      <div class="card mt-4 border-0 bg-white border rounded" style="max-width: 90%; height: 8rem;">
        <div class="row g-0 h-100">
          <div class="col">
            <div class="card-body">
              <div class="head row d-flex flex-row justify-content-between">
                <h5 class="card-title d-inline col fw-bold"><a href="{{ route('details', $item) }}">{{ $item->title }}</a></h5>
                <span class="ml-auto d-inline col-auto fw-bold">@if($item->price) {{ $item->price }}  zł@else Brak ceny @endif</span>
              </div>
              <img src="{{ $item->img }}">
              <p class="card-subtitle">{{ $item->location }}</p>
              <p class="card-text position-absolute bottom-0 pb-2"><small class="text-muted">{{ $item->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  @else
    <p>There are no advertisements.</p>
  @endif
  </div>
@endsection