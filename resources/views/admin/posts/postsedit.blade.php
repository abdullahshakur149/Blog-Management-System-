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
        <h1>Edit Post</h1>
        
        <form action="{{Route('admin.posts.update', ['id' =>$post->post_id])}}" method="POST" enctype="multipart/form-data"> 

            @csrf
            
            <div class="mb-3">
                <label for="post_title" class="form-label">Post Title</label>
                <input type="text" class="form-control" id="post_title" name="post_title" value="{{ $post->post_title }}" required> 
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control" required> 
                    <option value="">Select a Category</option> 
                    @foreach ($category as $categories) 
                        <option value="{{ $categories->category_id }}">{{ $categories->category_title }}</option> 
                    @endforeach
                </select>
            </div>
    
            <div class="mb-3">
                <label for="post_image" class="form-label">Post Image</label>
                <input type="file" class="form-control" id="post_image" name="post_image"> 
                <small class="text-muted mt-4">Current image: <img src="{{ asset('storage/' . $post->post_image) }}" class="img-fluid" alt="{{ $post->post_title }}" style="max-width: 100px;"></small>
            </div>
    
            <button type="submit" class="btn btn-primary">Update Category</button> 
        </form>
    </div>
    </main>

    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
