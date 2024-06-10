@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center gap-3 py-3">
        <h1 class="fw-bold text-center">Best Seller</h1>
        <span><strong>film trovati : </strong>{{ count($bestSeller) }}</span>
    </div>
    <div class="d-flex w-75 m-auto flex-wrap gap-4">
        @foreach ($bestSeller as $movie)
            @include('partials.card')
        @endforeach
    </div>
@endsection
