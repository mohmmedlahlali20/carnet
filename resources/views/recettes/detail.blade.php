@extends('base')
@section('title', 'detail')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="text-center">
            <img style="width: 200px" src="{{ asset('storage/' . $recettes->image) }}" class="card-img-top" alt="Recettes Image">
        </div>
        <div class="card-body">
            <h5 class="card-title">Title : {{ $recettes->title }}</h5>
            <p class="card-text">Description : {{ $recettes->description }}</p>
            <h6 class="card-text">date de creation : {{ $recettes->created_at }}</h6>
            <p class="card-text"><small class="text-muted">Écrit par: {{ $recettes->user_id }}</small></p>
        </div>
    </div>
</div>
<a class="btn btn-danger mt-4 btn-block" href="/"><i class="fa fa-backward" aria-hidden="true"></i></a>
@endsection
