<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.Navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <br><br><br><br>

    <div class="flex justify-center">
        <div class="flex flex-col-center bg-neutral98 justify-center gap-16 p-20 my-20 w-[80rem] rounded-lg">
            <div class="flex flex-row gap-14">
              <div class="flex flex-col gap-14 items-center">
                <div class="rounded-full items-center">
                    <img src="{{ asset('image/profileMale.png') }}" alt="" class="w-[15rem] h-[15rem] object-fill rounded-full" />
                </div>
                <div class="flex flex-row gap-2 bg-tertiary50 rounded-full px-9 py-3 items-center m-0">
                  <img src="{{ asset('image/editIcon.svg') }}" alt="" class="bg-cover"/>
                  <a href="{{ route('editProfil') }}" class="font-semibold text-[1.75rem] text-white tracking-wide m-0">Edit Profile</a>
                </div>
              </div>
              <div class="flex flex-col gap-3">
                <h2 class="text-black font-bold m-0">{{ $pengguna->name }}</h2>
                <div class="flex flex-col gap-3">
                  <p class="text-black text-[1.75rem] font-medium m-0">@keanu_ganteng</p>
                  <div class="flex flex-row gap-2">
                    <p class="text-black text-[1.75rem] font-medium m-0">{{ $pengguna->age }}</p>
                    <p class="text-black text-[1.75rem] font-medium m-0">tahun</p>
                  </div>  
                  <p class="text-black text-[1.75rem] font-medium m-0">{{ $pengguna->job }}</p>
                  <div class="flex flex-row gap-2 items-center">  
                    <img src="{{ asset('image/maleIcon.svg') }}" alt=""/>
                    <p class="text-black text-[1.75rem] font-medium m-0">{{ $pengguna->gender }}</p>
                  </div>  
                  <div class="flex flex-row gap-2">  
                    <img src="{{ asset('image/callIcon.svg') }}" alt=""/>
                    <p class="text-black text-[1.75rem] font-medium m-0">{{ $pengguna->phoneNumber }}</p>
                  </div>  
                </div>
              </div>          
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>