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
    <div class="container mt-4">
        <h1>Edit Testimonial</h1>
        
        <form action="{{Route('admin.testimonials.update', ['id' => $testimonials->testimonials_id])}}" method="POST">   
            @method('PUT')
             @csrf
            
            <div class="mb-3">
                <label for="testimonials_title" class="form-label">Testimonial Title</label>
                <input type="text" class="form-control" id="testimonials_title" name="testimonials_title" value="{{ $testimonials->testimonials_title }}" required> 
            </div>

            <div class="mb-3">
                <label for="testimonials_description" class="form-label">Testimonial description</label>
                <input type="text" class="form-control" id="testimonials_description" name="testimonials_description" value="{{ $testimonials->testimonials_description }}" required> 
            </div>

            <div class="mb-3">
                <label for="testimonials_summernote" class="form-label">Testimonial summernote</label>
                <input type="text" class="form-control" id="testimonials_summernote" name="testimonials_summernote" value="{{ $testimonials->testimonials_description }}" required> 
            </div>

    
            <button type="submit" class="btn btn-primary">Update Testimonial</button> 
        </form>
    </div>
    </main>

    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
