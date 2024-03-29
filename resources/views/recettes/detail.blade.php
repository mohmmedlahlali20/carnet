@extends('base')
@section('title', 'detail')
@section('content')
<br>
<div class="container">
    @if ($recettes)
    <div class="card">
        <br>
        <div class="text-center">
            <img style="width: 400px  ; height:400px"  src="{{ asset('storage/' . $recettes->image) }}" class="card-img-top" alt="Recettes Image">
        </div>
        <div class="card-body">
            <h5 class="card-title">Title : {{ $recettes->title }}</h5>
            <p class="card-text">Description : {{ $recettes->description }}</p>
            <h6 class="card-text">date de creation : {{ $recettes->created_at }}</h6>
            <span>&#11088;&#11088;&#11088;&#11088;</span>
        </div>
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        <h3> this recettes dosn't exist</h3>
        <a href="create" class="btn btn-warning">ADD&nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i></a>
    </div>
    @endif
</div>
<a class="btn btn-danger mt-4 btn-block" href="/"><i class="fa fa-backward" aria-hidden="true"></i></a>
@endsection