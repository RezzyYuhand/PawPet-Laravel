<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditProfile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.Navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    
    <script>
        function handleFemaleClick() {
            var femaleButton = document.getElementById('femaleButton');
            var maleButton = document.getElementById('maleButton');
            var genderInput = document.getElementById('gender');
    
            if (!femaleButton.classList.contains('selected')) {
                femaleButton.classList.add('selected');
                maleButton.classList.remove('selected');
                genderInput.value = 'Perempuan'; // Set the value to 'Perempuan' for female selection
                console.log("Perempuan");
            }
        }
    
        function handleMaleClick() {
            var femaleButton = document.getElementById('femaleButton');
            var maleButton = document.getElementById('maleButton');
            var genderInput = document.getElementById('gender');
    
            if (!maleButton.classList.contains('selected')) {
                maleButton.classList.add('selected');
                femaleButton.classList.remove('selected');
                genderInput.value = 'Laki-Laki'; // Set the value to 'Laki-Laki' for male selection
                console.log("Laki-Laki");
            }
        }
    </script>
    <br><br><br><br><br><br>
    <div>
        <div class="flex justify-center">
            <div class="flex flex-col-center bg-neutral98 justify-center gap-16 p-20 my-20 w-[80rem] rounded-lg">
                <form method="POST" action="{{ route('updateProfil') }}" class="flex flex-col gap-2">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('image/profileMale.png') }}" alt="" class="w-[15rem] h-[15rem] object-cover rounded-full" />
                    </div>
                    <div class="flex flex-col w-[46.188rem] gap-2">
                        <label htmlFor="" class="font-semibold text-[1.75rem] text-[#735943]">Nama</label>
                        <input 
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Your Name" 
                            value="{{ $pengguna->name }}"
                            class="border border-[#655D58] rounded-md text-[1.5rem] h-9 px-4 py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                        />
                    </div>
                    <div class="flex flex-col w-[46.188rem] gap-2">
                        <label htmlFor="" class="font-semibold text-[1.75rem] text-[#735943]">Age</label>
                        <input 
                            type="number"
                            name="age"
                            id="age"
                            min="1"
                            placeholder="20" 
                            value="{{ $pengguna->age }}"
                            class="border border-[#655D58] rounded-md text-[1.5rem] h-9 px-4 py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                        />
                    </div>
                    <div class="flex flex-col w-[46.188rem] gap-2">
                        <label htmlFor="" class="font-semibold text-[1.75rem] text-[#735943]">Gender</label>
                        <div class="flex flex-row gap-6">
                            <input type="hidden" name="gender" id="gender" value="{{ $pengguna->gender }}">
                                <div class="flex flex-row gap-2 items-center">
                                    <span 
                                        onclick="handleFemaleClick()"
                                        id="femaleButton"
                                        class="border border-[#735943] rounded-md h-6 w-6 flex justify-center items-center cursor-pointer">
                                        @if($pengguna->gender === 'Perempuan')
                                            <span class='border bg-secondary rounded-md h-full aspect-square' ></span>
                                        @endif
                                    </span>
                                    <span class="font-normal text-[1.5rem] text-black">Perempuan</span>
                                </div>
                                <div class="flex flex-row gap-2 items-center">
                                    <span 
                                        onclick="handleMaleClick()"
                                        id="maleButton"
                                        class="border border-[#735943] rounded-md h-6 w-6 flex justify-center items-center cursor-pointer">
                                        @if($pengguna->gender === 'Laki-Laki')
                                            <span class='border bg-secondary rounded-md h-full aspect-square' ></span>
                                        @endif
                                    </span>
                                    <span class="font-normal text-[1.5rem] text-black">Laki - Laki</span>
                                </div>
                            </input>
                        </div>
                    </div>
                    <div class="flex flex-col w-[46.188rem] gap-2">
                        <label htmlFor="" class="font-semibold text-[1.75rem] text-[#735943]">Job</label>
                        <input 
                            type="text"
                            placeholder="Your Job" 
                            id="job"
                            name="job"
                            value="{{ $pengguna->job }}"
                            class="border border-[#655D58] rounded-md text-[1.5rem] h-9 px-4 py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                        />
                    </div>
                    <div class="flex flex-col w-[46.188rem] gap-2">
                        <label htmlFor="" class="font-semibold text-[1.75rem] text-[#735943]">Phone Number</label>
                        <input
                            type="text"
                            id="phoneNumber"
                            name="phoneNumber"
                            placeholder="6282123456789" 
                            value="{{ $pengguna->phoneNumber }}"
                            class="border border-[#655D58] rounded-md text-[1.5rem] h-9 px-4 py-6 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"
                        />
                    </div>
                    <div class="flex flex-row justify-end gap-3">
                        <a href="{{ route('cancelEdit') }}" class="text-[1.375rem] h-fit w-fit px-12 py-3 mt-2 bg-[#598AC1] text-center text-white rounded-full">
                            Cancel
                        </a>
                        <button type="submit" class="text-[1.375rem] h-fit w-fit px-12 py-3 mt-2 bg-[#598AC1] text-center text-white rounded-full">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @include('partials.footer')
    </div>
</body>
</html>