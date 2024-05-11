<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Posts</title>

    @include('admin.styles.styles') 
</head>
<body>

    @component('admin.components.header.header') 
    @endcomponent

    @component('admin.components.sidebar.sidebar') 
    @endcomponent

    <main id="main">
        <div class="container my-4"> <!-- Container with margin -->
            <h1 class="text-center">List of Posts</h1>

            <!-- Button to create a new post -->
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success mb-3">Create New Post</a>

            <!-- Display the posts -->
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4"> 
                        <div class="card h-100"> 
                            <!-- Post image -->
                            <img src="{{ asset('storage/' . $post->post_image) }}" class="card-img-top" alt="{{ $post->post_title }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->post_title }}</h5> 
                            </div>

                            <div class="card-footer d-flex flex-column"> 
                                <a href="{{Route('admin.posts.show', ['id' => $post->post_id])}}" class="btn btn-primary mb-1"><i class="bi bi-eye"></i>View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Optional JavaScript and Bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
