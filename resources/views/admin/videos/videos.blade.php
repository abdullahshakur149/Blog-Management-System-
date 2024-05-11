<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos List</title>

    @include('admin.styles.styles')

</head>
<body>

    @include('admin.components.header.header')
    @include('admin.components.sidebar.sidebar')


    <main id="main">
        <div class="container my-4"> 
            <h1 class="text-center">List of Videos</h1>
    
            <a href="{{ route('admin.videos.create') }}" class="btn btn-success mb-3">Create New Videos</a>
    
            <div class="row">
                @foreach($videos as $video)
                    <div class="col-md-4 mb-4"> 
                        <div class="card h-50"> 
                            <iframe width="320" height="240" src="https://www.youtube.com/embed/{{$video->video_link}}" frameborder="0" allowfullscreen></iframe>

    
                            <div class="card-body">
                                <h5 class="card-title">{{ $video->video_title }}</h5> 
                            </div>
    
                            <div class="card-footer d-flex flex-column"> 
                                <div class="btn-group">
                                    <a href="{{Route('admin.videos.edit', ['id' => $video->video_id])}}" class="btn btn-warning mb-1"><i class="bi bi-pen"></i>Edit</a>
                                    <form action="{{Route('admin.videos.delete', ['id' => $video->video_id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
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
