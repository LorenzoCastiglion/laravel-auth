@extends('layouts.admin')

@section('content')

    <h1>{{$project->name}}</h1>
    <div class="show-contain overflow-scroll">
        <p>{{$project->description}}</p>
        <img src="{{ asset('storage/' . $project->cover_image) }}">
    </div>

@endsection