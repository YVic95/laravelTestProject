<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" />
    <script src="https://kit.fontawesome.com/7de7010138.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Find Laravel Jobs & Projects</title>
</head>
<body class="mb-24">
    {{--Nav bar--}}
    @include('partials._nav')
    {{--VIEW OUTPUT--}}
    <main>
        @yield('listing-content')
        @yield('listing-form')
    </main>
    {{--Footer section--}}
    @include('partials._footer')
</body>
</html>