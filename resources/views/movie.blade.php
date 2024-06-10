@extends('layouts.app')

{{--  qui il contenuto della pagine home page --}}
@section('content')
    <h1 class="fw-bold pt-5 pb.3 text-center">Movie</h1>
    <div class="d-flex w-75 m-auto flex-wrap gap-4">
    @foreach ($moviesList as $movie)
        @include('partials.card') 
    @endforeach
    </div>
@endsection