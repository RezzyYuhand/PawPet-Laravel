<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profilHewan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profil Hewan</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-4 text-center">
                <img src="{{ asset('img/pet.png') }}" alt="petImage">
                <a href="/pawpet/public/profilHewan/{{ $hewan->id }}/{{ $hewan->adoptStatus }}">
                    <button class="btn-adopsi">{{ $hewan->adoptStatus }}</button>
                </a>
            </div>
            <div class="col-6">
                <form class="row g-3 d-flex" method="post" action="/pawpet/public/editProfilHewan">
                    @csrf
                    <div class="col-12 mt-5"></div>
                    <div class="col-12 mt-4">
                        <input type="hidden" name="id" value="{{ $hewan->id }}">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $hewan->name }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="inputTipe" class="form-label">Tipe</label>
                        <input type="text" class="form-control" name="type" value="{{ $hewan->type }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="inputRas" class="form-label">Ras</label>
                        <input type="text" class="form-control" name="race" value="{{ $hewan->race }}" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="inputUmur" class="form-label">Umur</label>
                        <input type="text" class="form-control" name="age" value="{{ $hewan->age }}" disabled>
                    </div>
                    <div class="col-md-2 mt-5">
                        <p class="mt-4">Bulan</p>
                    </div>
                    <div class="col-md-6">
                        <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="gender" value="{{ $hewan->gender }}" disabled>
                    </div>
                    <div class="col-12">
                        <label for="inputRiwayatKesehatan" class="form-label">Riwayat Kesehatan</label>
                        <textarea class="form-control" name="health" rows="6" disabled> {{ $hewan->health }} </textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="submit" class="btn-action" name="action" value="hapus">Hapus</button>
                        <button type="submit" class="btn-action" name="action" value="edit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>