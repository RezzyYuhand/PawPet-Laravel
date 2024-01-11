<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <nav class="navbar fixed-top navbar-expand-lg color-bg">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                <img src="{{ asset('image/pawpet_img.png') }}" width="43" height="58" alt="">
                <img src="{{ asset('image/pawpet_text.png') }}" width="129" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 me-lg-5 gap-5">
                    <li class="nav-item">
                        <a class="nav-link active text" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="{{ route('home') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="{{ route('pet') }}">Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="{{ route('adoption') }}">Adoption</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="{{ route('home') }}">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text me-3">
                    <a href="{{ route('profil') }}">
                        <img src="{{ asset('image/avatar.svg') }}" alt="UserProfile" width="60px" height="60px">
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="rounded-pill p-3 button-1 border-0" type="submit">Logout</button>
                    </form>
                </span>
            </div>
        </div>
    </nav>
</body>

</html>