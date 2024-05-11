<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thumbnails</title>

    @include('admin.styles.styles')

    <style>
        .modal-dialog-custom {
            max-width: 80%;
        }
    </style>
</head>
<body>

    @include('admin.components.header.header');
    @include('admin.components.sidebar.sidebar')

    <main id="main" class="container mt-5">

        <a href="{{ route('admin.thumbnails.create') }}" class="btn btn-success mb-3">Create New Thumbnails</a>


        <div class="container mt-5">
            <h2 class="text-center">Thumbnail Gallery</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($thumbnails as $thumbnail)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $thumbnail->thumbnail_images->first()->thumbnail_image_url) }}" class="card-img-top" alt="Thumbnail Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $thumbnail->thumbnail_title }}</h5>
                            <p class="card-text">Number of Images: {{ $thumbnail->thumbnail_images->count() }}</p>
                            <a href="{{ route('admin.thumbnails.show', ['id' => $thumbnail->thumbnail_id]) }}" class="btn btn-primary">View Details</a>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $thumbnail->id }}">
                                View All Images
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $thumbnail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-custom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">All Images</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    @foreach($thumbnail->thumbnail_images as $image)
                                    <div class="col mb-4">
                                        <img src="{{ asset('storage/' . $image->thumbnail_image_url) }}" class="img-thumbnail" alt="Thumbnail Image">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
       
    </main>



    @include('admin.styles.js')
   
</body>
</html>
