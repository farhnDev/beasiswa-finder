<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Link CDN, Fonts DLL -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="website icon" type="image/png" href="images/befind.png">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poetsen+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Platypi:ital,wght@0,300..800;1,300..800&family=Poetsen+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Platypi:ital,wght@0,300..800;1,300..800&family=Poetsen+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Poetsen+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Z1M4tP3I+IOr3BdpbH/DmHi+oXZBqYaV8T8Vu2/Sx33o7nb+tUe2q1sUm5VIyHMPmXh92H51M3yL+xTYf/60TQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body class="fade-in" style="background-color: #EEEDDE">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-center pt-4">
            <a href="/"><img src="/assets/logoo.png" class="img-fluid" style="width: 100px; height: auto;"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <div class="navbar-nav mt-3 mb-lg-0 gap-3">
                    <p class="nav-item">
                        <a class="nav-link fw-medium" href="{{ url('about') }}">About</a>
                    </p>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Beasiswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="s1">Beasiswa S1</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="s2">Beasiswa S2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="s3">Beasiswa S3</a></li>
                        </ul>
                    </li>
                    <p class="nav-item">
                        <a class="nav-link fw-medium" href="tips">tips</a>
                    </p>
                    <p class="nav-item">
                        <a class="nav-link fw-medium" href="motivasi">Motivasi</a>
                    </p>
                    @if (Route::has('login'))
                        @auth
                        <div class="collapse navbar-collapse mb-3" id="navbarSupportedContent">
                            <form class="d-flex" role="search"  action="{{ route('search') }}" method="GET">
                                <input class="form-control me-2" style="border-color: black;" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </form>
                        </div>
                        @endauth
                    @endif
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-end gap-3 fade-in">
                    @if (Route::has('login'))
                        @auth
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                                <span>Hello, {{ Auth::user()->name }}</span>
                            </button>
                            <div class="dropdown-menu mt-5" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile">Profile</a>
                                <a class="dropdown-item" href="keep">Keep</a>
                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                            </div>
                        @else
                            <a href="{{ url('signup') }}"><button
                                    class=" btn btn-outline-dark text-center">Register</button></a>
                            <a href="login"><button class=" btn btn-outline-dark text-center">Login</button></a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
