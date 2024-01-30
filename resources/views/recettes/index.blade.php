@extends('base')
@section('title', 'recette')
@section('content')
<h1 class="text-center display-4">Recette Liste</h1>
    <a href="" class="btn btn-primary">Ajouter une nouvelle Recette</a>
    <br>
    <br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">titel</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recettes as $recette)
            <tr>
                <td>{{ $recette->id }}</td>
                <td>{{ $recette->title }}</td>
                <td>{{ Str::limit($recette->description ,20)}}</td>
                <td>{{ $recette->image }}</td>
                <td>
                    <a class="btn btn-info" href="">Update</a>
                    <br>
                    <br>
                    <form method=""  action="">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $recettes->links() }}
@endsection

    
