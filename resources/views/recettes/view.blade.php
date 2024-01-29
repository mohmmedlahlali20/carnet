@extends('base')
@section('titel','recette')

@section('content')
    <h1>recette list</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>titel</th>
                <th>discrption</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recettes as $recette)
            <tr>
                <th>{{$recette->id}}</th>
                <th>{{$recette->title}}</th>
                <th>{{$recette->description}}</th>
                <th>{{$recette->image}}</th>
                <th>action</th>
            </tr>
            @empty
                <tr>
                    <td colspan="6"><h2>no recette</h2></td>
                </tr>
            @endempty
            @endforelse
        </tbody>
    </table>
@endsection
    
