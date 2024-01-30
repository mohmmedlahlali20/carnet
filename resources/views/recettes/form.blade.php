<div  class=" m-5">
    <div  class="row my-4">
        <form action="" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">title</span>
                <input name="title" type="text" class="form-control" placeholder="Titre de votre Recette" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group mb-3">
                <input name="image" type="file" class="form-control" placeholder="IMG"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="Description" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <br>
            <div class="d-grid">
                <button class="btn btn-info mt-4 btn-block" type="submit">Add New Recette</button>
            </div>
        </form>
    </div>
</div>