@extends('base')
@section('title', 'home')
@section('content')
    <div class="container">
        <h1 class="text-center display-4">Toutes les recettes</h1><br><br>
        <a href="recettes" class="btn btn-info">Gestion Des recettes</a> <br>     <br>
        @if (is_numeric($_GET['query']))
        <div class="alert alert-danger">
            <h1> 
                 "{{$_GET['query']}}" est un nombre.
            </h1>
            <a class="btn btn-danger" href="/">Retour</a>
        </div>
    @else
        @if($recettes->isEmpty())
            <div class="alert alert-danger">
                <h1> 
                    Aucune result  "{{ $_GET['query'] }}" n'a été trouvée.
                </h1>
                <a href="recettes/create" class="btn btn-warning text-center">Ajouter la recette "{{ $_GET['query'] }}" ? <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        @else
            <div class="row">
                @foreach($recettes as $recette)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img width="100px"  height="300px" src="storage/{{ $recette->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $recette->title }}</h5>
                                <p class="card-text">{{ Str::limit($recette->description ,20) }}</p>
                                <span>&#11088;&#11088;&#11088;&#11088;</span>
                                <a href="{{ route('AfficherDetail', $recette->id) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
    
@endsection
