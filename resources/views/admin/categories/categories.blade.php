<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Categories</title>

    @include('admin.styles.styles')

</head>
<body>

@component('admin.components.header.header')
@endcomponent
   
@component('admin.components.sidebar.sidebar')
@endcomponent

<main id="main">
    <div class="container">
        <h1 class="my-4 text-center">List of Categories</h1>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Create New Category</a>

        <div class="row">
            @foreach($category as $category)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $category->category_image) }}" class="card-img-top" alt="{{ $category->category_title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->category_title }}</h5>
                            <p class="card-text">{{ $category->category_description }}</p>
                        </div>
                        <div class="card-footer d-flex flex-column"> 
                            <a href="{{Route('admin.categories.show', ['id' => $category->category_id])}}" class="btn btn-primary mb-1"><i class="bi bi-eye"></i>View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>



    
</body>
</html>