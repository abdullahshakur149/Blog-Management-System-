<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Thumbnail</title>

    @include('admin.styles.styles')

    
</head>
<body>

    @include('admin.components.header.header');
    @include('admin.components.sidebar.sidebar')

    <main id="main">

        <div class="container mt-5">
            <h2>Create Thumbnail</h2>
            
            <form action="{{ route('admin.thumbnails.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="thumbnailTitle" class="form-label">Thumbnail Title</label>
                    <input type="text" class="form-control" id="thumbnailTitle" name="thumbnail_title" required>
                </div>
                <div class="mb-3">
                    <label for="thumbnailImages" class="form-label">Thumbnail Images</label>
                    <input type="file" class="form-control" id="thumbnailImages" name="thumbnail_multiple_images[]" multiple required>
                </div>
                <button type="submit" class="btn btn-primary">Create Thumbnail</button>
            </form>
        </div>

    </main>
    
</body>
</html>