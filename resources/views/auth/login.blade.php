<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex flex-row min-h-screen pl-4 pr-24 items-center justify-center gap-16 bg-[#FFF8F5]">
        {{-- Bagian ilustrasi --}}
        <img src="{{ asset('image/animal.png') }}" alt="ilustration" class="w-[50%]" />

        {{-- Bagian form login --}}
        <div class="flex flex-col justify-center bg-white rounded-lg">
            <form method="POST" action="{{ route('auth.login') }}" class="flex flex-col w-[30.875rem] h-[35.5rem] py-12 px-[4.5rem] justify-center items-center gap-8">
                @csrf

                <div class="text-center font-semibold text-[1.75rem]">PawPet</div>
                <div class="flex flex-col gap-6 w-full">
                    {{-- Input field username --}}
                    <div class="flex flex-col gap-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your username" class="border border-[#BEBEBF] rounded-md h-12 px-4 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none" value="{{ old('username') }}" required>
                    </div>

                    {{-- Input field password --}}
                    <div class="flex flex-col gap-3">
                        <label for="password">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="Enter your password" class="border border-[#BEBEBF] rounded-md h-12 px-4 hover:border-[#E0EFFE] focus:border-[#E0EFFE] focus:border-[3px] focus:outline-none w-full" required>

                            @if ($errors->has('username'))
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $errors->first('username') }}
                            </div>
                            @endif
                            @if ($errors->has('password'))
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-6 w-full items-center">
                    <button type="submit" class="h-[3.25rem] w-full bg-[#598AC1] text-center text-white rounded-lg">Login</button>

                    <div class="font-normal text-[1rem] text-[#BEBEBF]">
                        Don't Have An Account?
                        <a href="{{ route('index') }}" class="text-[#598AC1]">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>