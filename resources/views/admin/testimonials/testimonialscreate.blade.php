<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Testimonials</title>

    @include('admin.styles.styles')
</head>
<body>

    @component('admin.components.header.header')
    @endcomponent
       
    @component('admin.components.sidebar.sidebar')
    @endcomponent

    <main id="main">
        <div class="container mt-4 text-center">
            <h1>Create New  Testimonial</h1>
            
            <form class="mt-5" action="{{Route('admin.testimonials.store')}}" method="POST">
                @csrf         
        
                <div class="mb-3">
                    <label for="testimonials_title" class="form-label">Testimonial Title</label>
                    <input type="text" class="form-control" name="testimonials_title" required> 
                </div>

                <div class="mb-3">
                    <label for="testimonials_description" class="form-label">Testimonial Description</label>
                    <input type="text" class="form-control" name="testimonials_description" required> 
                </div>

                <div class="mb-3">
                    <label for="testimonials_summernote" class="form-label">Testimonial summernote</label>
                    <input type="text" class="form-control" name="testimonials_summernote" required> 
                </div>
        
                <button type="submit" class="btn btn-primary">Create Testimonial</button> 
            </form>
        </div>
    </main>
    
</body>
</html>