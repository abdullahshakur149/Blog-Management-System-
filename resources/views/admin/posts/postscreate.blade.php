<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Posts</title>

    @include('admin.styles.styles')
</head>
<body>

    @component('admin.components.header.header')
    @endcomponent
       
    @component('admin.components.sidebar.sidebar')
    @endcomponent

    <main id="main">
        <div class="container mt-4 text-center">
            <h1>Create New Post</h1>
            
            <form class="mt-5" action="{{Route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
        
                <!-- Category Dropdown -->
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
                    <input type="file" class="form-control" name="post_image" required> 
                </div>
        
                <div class="mb-3">
                    <label for="post_title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" name="post_title" required> 
                </div>
        
                <button type="submit" class="btn btn-primary">Create Post</button> 
            </form>
        </div>
    </main>
    
</body>
</html>