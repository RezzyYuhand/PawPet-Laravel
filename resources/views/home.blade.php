<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.Navbar')
    <br><br><br><br><br><br>
    <div class="flex flex-col justify-center items-center">
        {{-- Find your own pet section --}}
        <div class="flex flex-row pl-28 w-full gap-20 justify-center xl:max-w-[1440px]">
            <div class="flex flex-col gap-6">
                <h1 class="font-bold text-[#7FA0C5] text-[3.5rem] pt-[14.5rem]">
                    Find your Own Pet
                </h1>
                <p class="text-[#5A422D] text-[1.125rem]">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit
                    phasellus mollis sit aliquam sit nullam neque ultrices.
                </p>
                <a href="{{ route('pet') }}" {{-- Adjust the route as needed --}} class="flex flex-row justify-center w-56 bg-[#2B7BBD] p-6 gap-2 text-white text-[1.375rem] rounded-[2.5rem]">
                    Get started {{-- Add image here if needed --}}
                </a>
            </div>
            <img src="{{ asset('image/home1.png') }}" alt="Home image" class="w-[42rem] h-[40rem] pt-11 font-semibold text-[1.375rem]" />
        </div>

        {{-- Welcome section --}}
        <div class="flex flex-col justify-center items-center gap-12 pt-40 pl-60 pr-48 pb-44 xl:max-w-[1440px]">
            <div class="container mx-auto text-center mb-16">
                <h2 class="font-bold text-[#7FA0C5] text-[3.5rem] text-center">
                    Welcome
                </h2>
                <p class="text-[#5A422D] text-[1.125rem]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum sint occaecat
                    cupidatat non proiden.
                </p>
            </div>

            <div class="flex flex-row">
                <div class="flex flex-col gap-9 w-1/2">
                    <h2 class="font-bold text-[#7FA0C5] text-[3.5rem] text-center">
                        About
                    </h2>
                    <p class="text-[#5A422D] text-[1.125rem]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
                    </p>
                </div>
                <img src="{{ asset('image/pawpetLogo.png') }}" alt="PawPet Logo" class="w-[30rem] object-cover lg:w-1/2">
            </div>

            {{-- Repeat the process as above for the "Welcome" section --}}

            {{-- Explore the lovely pet section --}}
            <div class="flex flex-col bg-[#FFF8F5] py-20 px-28 items-center gap-12 w-full">
                <h1 class="font-bold text-[#7FA0C5] text-[3.5rem] text-center">
                    Explore The Lovely Pet
                </h1>
                <div class="flex flex-row justify-center gap-9"> {{-- Mengubah justify-between menjadi justify-center --}}
                    <img src="{{ asset('image/cat1.png') }}" alt="Cat 1" class="w-[23.5rem] rounded-[1.5rem]" />
                    <img src="{{ asset('image/dog1.png') }}" alt="Dog 1" class="w-[23.5rem] rounded-[1.5rem]" />
                    <img src="{{ asset('image/cat2.png') }}" alt="Cat 2" class="w-[23.5rem] rounded-[1.5rem]" />
                </div>
                <a href="{{ route('pet') }}" class="w-auto bg-[#2B7BBD] px-14 py-6 gap-2 text-white text-[1.375rem] rounded-[2.5rem] shadow-xl mt-8 mx-auto"> {{-- Menambahkan mt-8 dan mx-auto --}}
                    Explore More
                </a>
            </div>


            {{-- Contact section --}}
            <div class="flex flex-col pt-9 pl-9 pr-9 pb-9 gap-[4.75rem] items-center xl:max-w-[1440px]"> {{-- Mengubah xl:max-w-[1440px] menjadi xl:max-w-full --}}
                <h1 class="font-bold text-[#7FA0C5] text-[3.5rem] text-center">
                    Contact
                </h1>
                <div class="flex flex-row gap-5 items-center">
                    <div class="pr-8"> {{-- Menambahkan pr-8 untuk memberikan margin ke kanan --}}
                        <img src="{{ asset('image/pawpetLogo.png') }}" alt="PawPet Logo" class="w-[30rem] h-auto" /> {{-- Memperbesar lebar gambar --}}
                    </div>
                    <div class="flex flex-col w-1/2">
                        <h2 class="font-bold text-[#00629F] text-[1.5 rem]">
                            Send us a message through this form for any information
                        </h2>
                        <form method="POST" action="{{ url('/contact') }}" class="flex flex-col w-[38rem] items-end">
                            @csrf
                            <div class="flex flex-col gap-4 pt-6 pb-9">
                                <label for="email" class="text-[1.75rem] font-semibold text-[#735943]">
                                    E-mail
                                </label>
                                <input type="email" name="email" id="email" class="w-[38rem] border border-[#BEBEBF] rounded-md h-12 px-4 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none" />

                                <label for="message" class="text-[1.75rem] font-semibold text-[#735943]">
                                    Message
                                </label>
                                <textarea name="message" id="message" class="h-[12rem] w-[38rem] border border-[#BEBEBF] rounded-md px-4 py-2 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none"></textarea>
                            </div>

                            <button type="submit" class="max-w-fit bg-[#2B7BBD] px-8 py-3 gap-2 text-white text-[1.375rem] rounded-[2.5rem] shadow-xl">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>




        </div>
        @include('partials.footer') {{-- Make sure 'partials.footer' exists --}}
</body>

</html>