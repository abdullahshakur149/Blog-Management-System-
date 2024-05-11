<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    @include('admin.styles.styles')
</head>
<body>

    @component('admin.components.header.header') 
    @endcomponent

    @component('admin.components.sidebar.sidebar') 
    @endcomponent

    <main id="main" class="main">
        <div class="container my-4">
            <h1 class="text-center animate__animated animate__fadeInDown">Admin Dashboard</h1>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card shadow-lg animate__animated animate__fadeInUp">
                        <div class="card-body p-4 text-center">
                            <h5>Total Posts</h5>
                            <p>{{ $total_posts }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card shadow-lg animate__animated animate__fadeInUp">
                        <div class="card-body p-4 text-center">
                            <h5>Total Categories</h5>
                            <p>{{ $total_categories }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-lg animate__animated animate__fadeInUp">
                        <div class="card-body p-4">
                            <h5>Recent Posts</h5>
                            <ul class="list-group">
                                @foreach ($recent_posts as $post)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $post->post_title }}
                                        <a href="{{ route('admin.posts.show', ['id' => $post->post_id]) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i> View
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
