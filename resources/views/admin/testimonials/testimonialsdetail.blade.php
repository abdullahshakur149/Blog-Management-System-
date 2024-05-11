<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Testimonials Details</title>

    @include('admin.styles.styles') <!-- Include Bootstrap and other styles -->
</head>
<body>

    @component('admin.components.header.header') 
    @endcomponent

    @component('admin.components.sidebar.sidebar') 
    @endcomponent

    <main id="main" class="main">
        <div class="container my-4">
            <h1 class="text-center">Testimonials Details</h1> 
            
            <div class="row justify-content-center">
               
                
                <div class="col-md-8">
                    <div class="card shadow-sm"> 
                        <div class="card-header bg-danger text-center text-white"> 
                            <h2>{{ $testimonials->testimonials_title }}</h2> 
                        </div>
                        <div class="card-header bg-warning text-center text-white"> 
                            <h5>{{ $testimonials->testimonials_description }}</h5> 
                        </div>
                        <div class="card-header bg-warning text-center text-white"> 
                            <p>{{ $testimonials->testimonials_summernote }}</p> 
                        </div>
                        <div class="card-body mt-3 text-center"> 
                            <img style="max-width: 50%; height: auto;"  src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=1060&t=st=1714651034~exp=1714651634~hmac=976a6e015e05c17038fdd155c172ed35ea44edc8ab77fbd815fb2b9e65233cff" class="card-img-top" alt="">

                        </div>
                        <div class="card-footer d-flex justify-content-around"> 
                            <a href="{{Route('admin.testimonials.edit', ['id' => $testimonials->testimonials_id ])}}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="{{Route('admin.testimonials.delete', ['id' => $testimonials->testimonials_id ])}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
