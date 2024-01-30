@extends('base')
@section('title', 'Create nouvelle Recetes')
@section('content')
<br>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('recettes.form')
@endsection
