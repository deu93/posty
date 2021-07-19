<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posty</title>
</head>
<body class="bg-gray-500">
    <nav class="py-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-3">Posts</a>
            </li>  
        </ul>

        <ul class="flex item-center">
            @auth
                <li>
                    <a href="" class="p-3">Alex</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="p-3">Logout</a>
                </li> 
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>  
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>