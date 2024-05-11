<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Posts</title>

    @include('admin.styles.styles') 
</head>
<body>

    @component('admin.components.header.header') 
    @endcomponent

    @component('admin.components.sidebar.sidebar') 
    @endcomponent

    <main id="main">
        <div class="container my-4"> 
            <h1 class="text-center">List of Testimonials</h1>

            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success mb-3">Create New Testimonial</a>

            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4 mb-4"> 
                        <div class="card h-50"> 
                            <!-- Post image -->
                            <img style="height: 100%;width:auto"  src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=1060&t=st=1714651034~exp=1714651634~hmac=976a6e015e05c17038fdd155c172ed35ea44edc8ab77fbd815fb2b9e65233cff" class="card-img-top" alt="">

                            <div class="card-body">
                                <h5 class="card-title">{{$testimonial->testimonials_title}}</h5> 
                            </div>

                            <div class="card-body">
                                <h5 class="card-description">{{$testimonial->testimonials_description}}</h5> 
                            </div>

                            <div class="card-body">
                                <h5 class="card-summernote">{{$testimonial->testimonials_summernote}}</h5> 
                            </div>

                            <div class="card-footer d-flex flex-column"> 
                                <a href="{{Route('admin.testimonials.show', ['id' => $testimonial->testimonials_id])}}" class="btn btn-primary mb-1"><i class="bi bi-eye"></i>View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Optional JavaScript and Bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
