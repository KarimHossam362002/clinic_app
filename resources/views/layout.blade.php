<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon"
        href="data:image/png;base64,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">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="{{ asset('assets/styles/pages/main.css') }}">

    <title>@yield('title')</title>
</head>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{route('home')}}">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{route('home')}}">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{route('majors')}}">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{route('doctor.index')}}">Doctors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{route('history')}}">History</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{route('login')}}">login</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{route('dashboard')}}">Dashboard</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- cut --}}

        {{-- cut --}}
        <main>
            @yield('content')
            {{-- cut --}}
        </main>
    </div>

    {{-- footer --}}
    <footer class="container-fluid bg-blue text-white py-3">
        <div class="row gap-2">

            <div class="col-sm order-sm-1">
                <h1 class="h1">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                    laborum
                    saepe
                    enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                    cum
                    iure
                    quod facere.</p>
            </div>
            <div class="col-sm order-sm-2">
                <h1 class="h1">Links</h1>
                <div class="links d-flex gap-2 flex-wrap">
                    <a href="{{route('home')}}" class="link text-white">Home</a>
                    <a href="{{route('majors')}}" class="link text-white">Majors</a>
                    <a href="{{route('doctor.index')}}" class="link text-white">Doctors</a>
                    <a href="{{route('login')}}" class="link text-white">Login</a>
                    <a href="{{route('register')}}" class="link text-white">Register</a>
                    <a href="{{route('contact')}}" class="link text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/scripts/home.js') }}"></script>
</body>

</html>
