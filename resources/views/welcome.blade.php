<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <form action="{{route('signup')}}" method="post" @submit.prevent="SignUp()" enctype="multipart/form-data">


        @if ($success=Session::get('success'))
        <div class="alert alert-success">
            <strong>{{$success}}</strong>

        </div>
        @endif

        <div class="input-box">
            <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder='Enter your email' />
            @error('email')
            <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
            @enderror
        </div>
        <div class="input-box">
            <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="" placeholder='password' />
            @error('password')
            <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
            @enderror
        </div>


        <div class="input-box">
            <select type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="" placeholder='password'>
                <option value="candidate">candidate</option>
                <option value="voter">voter</option>
            </select>
            @error('password')
            <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
            @enderror
        </div>





        <div>
            <select name="roles" id="">
                <option value="candidate">candidate</option>
                <option value="voter">voter</option>
            </select>
        </div>



        <div class="input-box button">
            <input type="Submit" value="Register Now" />
        </div>
        @csrf
        <div class="text">
            <h3>
                Already have an account?
                <a class="a" href="login">Login now</a>
            </h3>
        </div>
    </form>


</body>

</html>