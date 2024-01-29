@extends('base')
@section('title', 'home')
@section('content')
<div class="container">
    <h1 class="text-center display-4">Toutes les recettes</h1>
    <div class="row">
        @foreach($recettes as $recette)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $recette->image }} " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recette->title }}</h5>
                        <p class="card-text">{{ $recette->description }}</p>
                        <a href="#" class="btn btn-primary">Voir la recette</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
