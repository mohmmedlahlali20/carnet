@extends('base')
@section('title', 'detail')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $Recettes->title }}</h5>
            </div>
            <div class="card-body">
                <img width="100px" src="storage/{{ $Recettes->image }}" class="card-img-top mb-3" alt="Recettes Image">
                <p class="card-text">{{ $Recettes->description }}</p>
                <p class="card-text">Écrit par: {{ $Recettes->user_id }}</p>
            </div>
        </div>
    </div>
@endsection