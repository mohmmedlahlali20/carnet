@extends('base')
@section('title', 'recette')
@section('content')
<form action="" method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Title</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <span class="input-group-text">With textarea</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Upload</label>
        <input type="file" class="form-control" id="inputGroupFile01">
      </div>
</form>
@endsection