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
        <div class="container my-4">
            <h1 class="text-center">Category Details</h1> 
            
            <div class="row justify-content-center">
               
                
                <div class="col-md-8">
                    <div class="card shadow-sm"> 
                        <div class="card-header bg-danger text-center text-white"> 
                            <h2>{{ $category->category_title }}</h2> 
                        </div>
                        <div class="card-body mt-3 text-center"> 
                            <img src="{{ asset('storage/' . $category->category_image) }}" class="img-fluid rounded" alt="{{ $category->category_title }}" style="max-width: 50%; height: auto;"> 
                        </div>
                        <div class="card-footer d-flex justify-content-around"> 
                            <a href="{{ route('admin.categories.edit', ['id' => $category->category_id]) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="{{ route('admin.categories.delete', ['id' => $category->category_id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script> 

</body>
</html>

