<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Post Details</title>

    @include('admin.styles.styles') <!-- Include Bootstrap and other styles -->
</head>
<body>

    @component('admin.components.header.header') 
    @endcomponent

    @component('admin.components.sidebar.sidebar') 
    @endcomponent

    <main id="main" class="main">
        <div class="container my-4">
            <h1 class="text-center">Post Details</h1> 
            
            <div class="row justify-content-center">
               
                
                <div class="col-md-8">
                    <div class="card shadow-sm"> 
                        <div class="card-header bg-danger text-center text-white"> 
                            <h2>{{ $post->post_title }}</h2> 
                        </div>
                        <div class="card-header bg-warning text-center text-white"> 
                            <h2>{{ $post->category->category_title }}</h2> 
                        </div>
                        <div class="card-body mt-3 text-center"> 
                            <img src="{{ asset('storage/' . $post->post_image) }}" class="img-fluid rounded" alt="{{ $post->post_title }}" style="max-width: 50%; height: auto;"> 
                        </div>
                        <div class="card-footer d-flex justify-content-around"> 
                            <a href="{{Route('admin.posts.edit', ['id' =>$post->post_id])}}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="{{Route('admin.posts.delete', ['id' => $post->post_id])}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
