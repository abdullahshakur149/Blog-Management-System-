<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thumbnail Details</title>

    @include('admin.styles.styles')

</head>
<body>

    @include('admin.components.header.header')
    @include('admin.components.sidebar.sidebar')

    <main id="main" class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Thumbnail Details
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $thumbnails->thumbnail_title }}</h5>
                        <p class="card-text">Number of Images: {{ $thumbnails->thumbnail_images->count() }}</p>
                        <!-- Display thumbnail images -->
                        <div class="row">
                            @foreach($thumbnails->thumbnail_images as $image)
                                <div class="col-md-3 mb-3">
                                    <img src="{{ asset('storage/' . $image->thumbnail_image_url) }}" class="img-thumbnail" alt="Thumbnail Image">
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <!-- Edit button -->
                            <a href="{{Route('admin.thumbnails.edit',  ['id' => $thumbnails->thumbnail_id])}}" class="btn btn-primary">Edit</a>
                            <!-- Delete button -->
                            <form action="{{Route('admin.thumbnails.delete', ['id' => $thumbnails->thumbnail_id])}}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this thumbnail?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('admin.styles.js')

</body>
</html>
