<div class="flex flex-col h-[12.1875rem] w-full bg-[#D0E4FF] pt-7 items-center">
    <div class="flex flex-row justify-center items-center gap-11">
        {{-- Social media icons here, icons might need to link to actual social media URLs --}}
        {{-- Untuk saat ini, ikon hanya diperlihatkan dan tidak diarahkan ke mana-mana --}}
        <a href="#" class="flex w-[3.4rem] h-[3.4rem] rounded-full bg-[#001D34] items-center justify-center">
            <img src="{{ asset('image/Instagram.png') }}" alt="Instagram" class="w-[2.5rem] h-[2.5rem]">
        </a>
        <a href="#" class="flex w-[3.4rem] h-[3.4rem] rounded-full bg-[#001D34] items-center justify-center">
            <img src="{{ asset('image/Facebook.png') }}" alt="Facebook" class="w-[2.5rem] h-[2.5rem]">
        </a>
        <a href="#" class="flex w-[3.4rem] h-[3.4rem] rounded-full bg-[#001D34] items-center justify-center">
            <img src="{{ asset('image/TwitterX.png') }}" alt="Twitter" class="w-[2.5rem] h-[2.5rem]">
        </a>
        <a href="#" class="flex w-[3.4rem] h-[3.4rem] rounded-full bg-[#001D34] items-center justify-center">
            <img src="{{ asset('image/LinkedIn.png') }}" alt="LinkedIn" class="w-[2.5rem] h-[2.5rem]">
        </a>
    </div>

    <div class="flex flex-row justify-center items-center gap-5 font-semibold mt-4 text-[1.5rem] text-[#001D34]">
        <a href="{{ url('/') }}" class="">Home</a>
        <span>|</span>
        {{-- Tentukan url about jika tersedia --}}
        {{-- <a href="{{ url('/about') }}" class="">About</a> --}}
        {{-- <span>|</span> --}}
        {{-- Tentukan url contact jika tersedia --}}
        {{-- <a href="{{ url('/contact') }}" class="">Contact</a> --}}
        {{-- <span>|</span> --}}
        <a href="{{ url('/adoption') }}" class="">Adoption</a>
    </div>

    <div class="mt-2 text-[1.375rem]">© 2023 PawPet | All Rights Reserved</div>
</div>