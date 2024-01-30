@extends('base')
@section('title', 'home')
@section('content')
    <div class="container">
        <h1  class="text-center display-4">Toutes les recettes</h1>
          <br>
          <br>
        <a href="recettes" class="btn btn-info">Gestion Des recettes </a>
        <br>
        <br>
        <div class="row">
            @foreach($recettes as $recette)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recette->title }}</h5>
                            <p class="card-text">{{ Str::limit($recette->description ,20) }}</p>
                            <p class="card-text">Created by: {{ $recette->user_id }}</p> 
                            <a href="{{ route('AfficherDetail', $recette->id) }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                {{-- {{ $recette->image }} --}}
            @endforeach
        </div>
    </div>
    {{ $recettes->links() }}
@endsection
