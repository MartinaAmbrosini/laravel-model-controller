@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card h-100">
                {{$movie -> title }}
                {{$movie -> nationality }}
                {{$movie -> date }}
                {{$movie -> vote }}
            </div>
        </div> 
        @endforeach
    </div>
@endsection
