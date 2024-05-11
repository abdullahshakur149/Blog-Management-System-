<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    
        <!-- Scripts -->
    
        @include('admin.styles.styles')

        <style>
          .modal-dialog-custom {
              max-width: 80%;
          }
      </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



</head>
<body>

    {{-- header --}}

    @include('components.Header')
    
    {{-- hero --}}

    @include('components.Hero')

    {{-- sponsors --}}

    @include('components.Sponsors')


    {{-- about --}}

    @include('components.About')


    {{-- call to action --}}
   
    @include('components.Calltoaction')


    {{-- testimonials --}}
   @include('components.Testimonials')

   {{-- recent posts --}}
   @include('components.recentposts')

   {{-- categories > posts --}}
   @include('components.categories')

   {{-- thumbnails --}}
   @include('components.thumbnails')





   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        const swiper = new Swiper('.swiper', {
          loop: true,
          speed: 600,
          autoplay: {
            delay: 5000,
          },
          slidesPerView: 'auto',
          pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
          },
        });
      </script>



</body>
</html>