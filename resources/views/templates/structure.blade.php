<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a href="{{ route("accueil") }}" class="mx-2 h1 text-decoration-none text-white">Accueil</a>
            <a href="{{ route("article") }}" class="mx-2 h1 text-decoration-none text-white">Article</a>
            <a href="{{ route("backoffice") }}" class="mx-2 h1 text-decoration-none text-white">BackOffice</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}" class="btn btn-danger"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-jet-dropdown-link>
            </form>
        </nav>
    </header>
    @yield('content')
    
</body>
</html>