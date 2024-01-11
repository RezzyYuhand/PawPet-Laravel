<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/adoption.css') }}">

</head>

<body>
  @include('partials.Navbar')
  <br><br><br><br><br><br>
  <div class="content-wrapper">
    <a href="{{route('addPet')}}">
      <button class="big-button" id="tambahButton">Tambah Hewan</button>
    </a>

    @forelse($hewans as $hewan)
    <div class="container">
      <img src="img/pet.png" alt="">

      <div class="pet-info">
        <h2>{{ $hewan->name }}</h2>
        <p>{{ $hewan->adoptStatus }}</p>
        <p>Ras : {{ $hewan->race }}</p>
        <p>Gender : {{ $hewan->gender }}</p>
      </div>

      <a href="/pawpet/public/profilHewan/{{ $hewan->id }}">
        <button class="small-button" id="lihatButton">Lihat</button>
      </a>
    </div>
    @empty
    <p>Tidak Ada Hewan</p>
    @endforelse

  </div>
  @include('partials.footer')

</body>

</html>