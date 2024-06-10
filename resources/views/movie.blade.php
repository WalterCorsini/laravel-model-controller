@extends('layouts.app')

{{--  qui il contenuto della pagine home page --}}
@section('content')
    <h1 class="fw-bold pt-5">Movie</h1>
    @foreach ($moviesList as $movie)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $movie['image']}}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{$movie['original_title']}}</p>
          <p class="card-text">{{$movie['vote']}} / 10</p>
        </div>
      </div>
    @endforeach
@endsection