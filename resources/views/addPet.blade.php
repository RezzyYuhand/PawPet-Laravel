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

    <div>
        <div class="flex justify-center">
            <div class="flex flex-row bg-neutral98 justify-center gap-16 p-20 my-20 w-[80rem] rounded-lg">
                <div class="flex flex-col items-center gap-3">
                    <div class="cursor-pointer">
                       <img src="{{ asset('image/dog.png') }}" alt="" class="w-[15rem] h-[15rem] object-cover rounded-full" />
                    </div>
                    <h4 class="h-fit w-fit px-8 py-3 mt-2 bg-secondary80 text-center text-white rounded-full shadow-md">tersedia untuk adopsi</h4>
                </div>
                <div class="flex flex-col">
                    <form action="{{ route('add') }}" method="POST" class="flex flex-col gap-3">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Nama</label>
                            <input 
                                type="text"
                                name="petName"
                                placeholder="Ex: Antonius" 
                                class="border border-neutral40 rounded-md h-9 px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                                required
                            />
                        </div>
                        <div class="flex flex-row gap-3">
                            <div class="flex flex-col gap-3 flex-1">
                                <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Tipe</label>
                                <input 
                                    type="text"
                                    name="petTipe"
                                    placeholder="Anjing" 
                                    class="border border-neutral40 rounded-md h-9 px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                                    required
                                />
                            </div>
                            <div class="flex flex-col gap-3 flex-1">
                                <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Ras</label>
                                <input 
                                    type="text"
                                    name="petRas"
                                    placeholder="Persia" 
                                    class="border border-neutral40 rounded-md h-9 px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                                    required
                                />
                            </div>
                        </div>
                        <div class="flex flex-row gap-3">
                            <div class="flex flex-col gap-3 flex-1">
                                <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Umur</label>
                                <div class="flex flex-row gap-2 items-center">
                                    <input 
                                        type="number"
                                        name="petUmur"
                                        min="1"
                                        placeholder="4"
                                        class="border border-neutral40 rounded-md h-9 px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                                        required
                                    />
                                    <h5 class="text-secondary text-[1.5rem]">Bulan</h5>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 flex-1">
                                <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Jenis Kelamin</label>
                                <input 
                                    type="text"
                                    name="petGender"
                                    placeholder="Jantan / Betina" 
                                    class="border border-neutral40 rounded-md h-9 px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                                    required
                                />
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label htmlFor="" class="font-semibold text-[1.75rem] text-secondary">Riwayat Kesehatan</label>
                            <textarea 
                                type="text"
                                name="petRiwayat"
                                placeholder="Anjing ini memiliki riwayat penyakit mata dan beberapa hal lainnya." 
                                class="border border-neutral40 rounded-md h-fit px-4 text-[1.5rem] py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                            ></textarea>
                        </div>
                        <button type="submit" class="text-[1.375rem] h-fit w-fit px-12 py-3 mt-2 bg-[#598AC1] text-center text-white rounded-full shadow-md">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')

</body>
</html>