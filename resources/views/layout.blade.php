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
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="#"><img class="w-16" src="images/favicon.ico" alt="logo"></a>
        <ul class="flex space-x-4 text-lg mr-6">
            <li>
                <a href="user.html" class="hover:text-red-700"><i class="fa-solid fa-user-plus"></i>Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-red-700"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            </li>
        </ul>    
    </nav>
    {{--VIEW OUTPUT--}}
    <main>
        @yield('listing-content')
    </main>
    <footer></footer>
</body>
</html>