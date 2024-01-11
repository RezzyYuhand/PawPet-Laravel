<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sign_up.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Sign Up</title>
</head>

<body>
  <div>
    <form action="{{ route('store') }}" method="post">
      @csrf
      <div class="container-1 mb-5">
        <h1 class="text-center"><b>Sign Up</b></h1>
        <p>Please fill in this form to create an account.</p>

        <label for="name"><b>Nama</b></label>
        <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ Session::get('name') }}" placeholder="Enter Nama" required>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <label for="age"><b>Umur</b></label>
        <input type="text" name="age" id="age" class="@error('age') is-invalid @enderror" value="{{ Session::get('age') }}" placeholder="Enter Umur" required>
        @error('age')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <tr>
          <label for="gender"><b>Gender</b></label><br>
          <input type="text" name="gender" class="@error('gender') is-invalid @enderror" id="gender" value="{{ Session::get('gender') }}" placeholder="Enter Gender" required>
          @error('gender')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          {{-- <td>
          <input id="female" type="radio" name="gender" id="gender" value="f">
          <label for="female">Female</label>
          <input id="male" type="radio" name="gender" id="gender" value="m">
          <label for="male">Male</label>
        </td> --}}
        </tr>
        <label for="job"><b>Job</b></label>
        <input type="text" name="job" id="job" class="@error('job') is-invalid @enderror" value="{{ Session::get('job') }}" placeholder="Enter Pekerjaan" required>
        @error('job')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <label for="username"><b>Username</b></label>
        <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror" value="{{ Session::get('username') }}" placeholder="Enter Username" required>
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <label for="email"><b>Email</b></label>
        <input type="text" class="@error('email') is-invalid @enderror" value="{{ Session::get('email') }}" placeholder="Enter Email" name="email" required>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <label for="password"><b>Password</b></label>
        <input type="password" class="@error('email') is-invalid @enderror" value="{{ Session::get('password') }}" placeholder="Enter Password" name="password" id="password" required>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <label for="phoneNumber"><b>Phone Number</b></label>
        <input type="text" name="phoneNumber" class="@error('phoneNumber') is-invalid @enderror" id="phoneNumber" value="{{ Session::get('phoneNumber') }}" placeholder="0812345678" required>
        @error('phoneNumber')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror

        <div class="clearfix">
          <button type="submit">Register</button>
        </div>
        <p class="text-center">
          Have an account?<a href="{{ route('auth.login') }}" style="color:dodgerblue"> Login</a>
        </p>
      </div>
    </form>
  </div>


</body>

</html>