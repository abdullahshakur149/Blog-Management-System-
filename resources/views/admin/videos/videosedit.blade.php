<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Video</title>

    @include('admin.styles.styles')

</head>
<body>

    @include('admin.components.header.header')
    @include('admin.components.sidebar.sidebar')


    <main id="main">
        <div class="container my-4"> 
            <h1 class="text-center">Edit a Video</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('admin.videos.update', ['id' => $videos->video_id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="video_title" class="form-label">Video Title</label>
                            <input type="text" class="form-control" id="video_title" name="video_title" value="{{$videos->video_title}}" placeholder="Enter video title">
                        </div>
                        <div class="mb-3">
                            <label for="video_link" class="form-label">Video Link</label>
                            <input type="text" class="form-control" id="video_link" name="video_link" value="{{$videos->video_link}}" placeholder="Enter video link">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Video</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
   

    @include('admin.styles.js')

</body>
</html>
