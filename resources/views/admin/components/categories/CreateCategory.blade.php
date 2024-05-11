<main id="main">
    <div class="container">
        <h1 class="my-4">Create New Category</h1>

        <form action="{{Route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="mb-3">
                <label  for="title" class="form-label">Category Title</label>
                <input type="text" class="form-control" id="title" name="category_title">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Category Image </label>
                <input type="file" class="form-control" id="image" name="category_image">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Category Description</label>
                <textarea class="form-control" id="description" name="category_description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
</main>
