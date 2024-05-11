<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Categories</title>

    @include('admin.styles.styles')

</head>
<body>

@component('admin.components.header.header')
@endcomponent
   
@component('admin.components.sidebar.sidebar')
@endcomponent

@component('admin.components.categories.CreateCategory')
@endcomponent
    
</body>
</html>