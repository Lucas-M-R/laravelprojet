
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link  href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    
    <div class="container mx-auto">
    @yield('content')
    </div>




    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>