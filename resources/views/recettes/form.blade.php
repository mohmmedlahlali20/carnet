<div  class=" m-5">
    <div  class="row my-4">
        @php
            $rout = $isUpdate ? route('recettes.edit', $recettes) : route('recettes.store');
        @endphp
        <form action="{{ route('recettes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titre</span>
                <input name="title" type="text" class="form-control" placeholder="Titre de votre recette" aria-label="Titre de votre recette" aria-describedby="basic-addon1" value="{{ old('title', $recettes->title) }}">
            </div>
            <br>
            <div class="input-group mb-3">
                <input name="image" value="{{old('image')}}" type="file" class="form-control" placeholder="IMG"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                    @if ($recettes->image)
                        <img src="/storage/{{ $recettes->image }}" class="card-img-top" style="width: 100px;" alt="...">
                    @endif
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="description" class="form-control" aria-label="With textarea">{{old('description',$recettes->description)}}</textarea>
            </div>
            <br>
            <div class="d-grit col-2 ">
                @if ($isUpdate === true)
                <a class="btn btn-info mt-4 btn-block" href="{{ route('recettes.edit', $recettes->id) }}">
                    Update
                </a>
            @else
                <button class="btn btn-info mt-4 btn-block" type="submit">Create</button>
            @endif
                <a class="btn btn-danger mt-4 btn-block" href="/">Page</a>
            </div>
        </form>
    </div>
</div>