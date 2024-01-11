<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/detailProfilHewan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Detail Profil Hewan</title>
</head>

<body>
    @include('partials.Navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <br><br><br><br>

    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-3 p-5 ms-md-5">
                <img src="{{ asset('image/dog.png') }}" alt="" style="width: 296px; height: 296px;">
            </div>
            <div class="col-7 pt-5 mx-5">
                <h3 class="subjudul mb-4">My name is, {{ $hewan->name }}</h3>
                <p class="rectangle p mb-4">{{ $hewan->adoptStatus }}</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat. Duis aute irure dolor in.i
                </p>
                <div class="row">
                    <div class="col-1">
                        <img src="{{ asset('image/avatar.svg') }}" alt="" style="width: 76px; height: 76px;"> 
                    </div>
                    <div class="col-9 mx-4 pt-2">
                        <p class="p-nama mb-1">{{ $pengguna->name }}</p>
                        <p>{{ $pengguna->phoneNumber }}</p>
                    </div>
                </div>
                <div class="text-end mb-5">
                    <div>
                        <a href="https://api.whatsapp.com/send/?phone={{ '62'.ltrim($pengguna->phoneNumber, '0') }}
                        &text={{ urlencode('Halo, saya dari PawPet tertarik dengan hewan anda') }}" target="_blank">
                            <button class="p-button" type="button">Kontak Pemilik</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 rectangle-2 p-5 mb-5 shadow">
                <h2 class="mb-4">Fact about me</h2>
                <div class="row">
                    <div class="col-2">
                        <p class="small-medium">Tipe</p>
                    </div>
                    <div class="col-1">
                      <p class="small-medium">:</p>
                    </div>
                    <div class="col">
                        <p>{{ $hewan->type }}</p>
                    </div>
                    <div class="col-2">
                        <p class="small-medium">Umur(Bulan)</p>
                    </div>
                    <div class="col-1">
                      <p class="small-medium">:</p>
                    </div>
                    <div class="col">
                        <p>{{ $hewan->age }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="small-medium">Ras</p>
                    </div>
                    <div class="col-1">
                      <p class="small-medium">:</p>
                    </div>
                    <div class="col">
                        <p>{{ $hewan->race }}</p>
                    </div>
                    <div class="col-2">
                        <p class="small-medium">Jenis Kelamin</p>
                    </div>
                    <div class="col-1">
                      <p class="small-medium">:</p>
                    </div>
                    <div class="col">
                        <p>{{ $hewan->gender }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>