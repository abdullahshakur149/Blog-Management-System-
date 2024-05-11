<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Thumbnail</title>

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
                        Edit Thumbnail
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.thumbnails.update', ['id' => $thumbnails->thumbnail_id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="thumbnail_title" class="form-label">Thumbnail Title</label>
                                <input type="text" class="form-control" id="thumbnail_title" name="thumbnail_title" value="{{ $thumbnails->thumbnail_title }}">
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail_images" class="form-label">Thumbnail Images</label>
                                <input type="file" class="form-control" id="thumbnail_images" name="thumbnail_multiple_images[]" multiple>
                            </div>

                            <div class="mb-3">
                                <label for="thumbnail">Thumbnail images</label>
                                <div class="row">
                                    @foreach($thumbnails->thumbnail_images as $image)
                                    <div class="col-md-3 mb-3">
                                        <img src="{{ asset('storage/' . $image->thumbnail_image_url) }}" class="img-thumbnail" alt="Thumbnail Image">
                                        <input type="checkbox" name="remove_images[]" value="{{ $image->thumbnail_image_id }}"> Remove
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Thumbnail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('admin.styles.js')

</body>
</html>
