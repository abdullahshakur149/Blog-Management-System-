<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Category Details</title>

    @include('admin.styles.styles')

</head>
<body>

    <!-- Include header component -->
    @component('admin.components.header.header') 
    @endcomponent
   
    <!-- Include sidebar component -->
    @component('admin.components.sidebar.sidebar') 
    @endcomponent
    
    <main id="main" class="main">
    <div class="container mt-4">
        <h1>Edit Category</h1>
        
        <form action="{{Route('admin.categories.update', ['id' => $category->category_id])}}" method="POST" enctype="multipart/form-data"> 

            @csrf
            @method('PUT') 
            
            <div class="mb-3">
                <label for="category_title" class="form-label">Category Title</label>
                <input type="text" class="form-control" id="category_title" name="category_title" value="{{ $category->category_title }}" required> <!-- Prepopulate with existing data -->
            </div>
    
            <div class="mb-3">
                <label for="category_description" class="form-label">Category Description</label>
                <textarea class="form-control" id="category_description" name="category_description">{{ $category->category_description }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="category_image" class="form-label">Category Image</label>
                <input type="file" class="form-control" id="category_image" name="category_image"> 
                <small class="text-muted mt-4">Current image: <img src="{{ asset('storage/' . $category->category_image) }}" class="img-fluid" alt="{{ $category->category_title }}" style="max-width: 100px;"></small>
            </div>
    
            <button type="submit" class="btn btn-primary">Update Category</button> <!-- Update button -->
        </form>
    </div>
    </main>

    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
