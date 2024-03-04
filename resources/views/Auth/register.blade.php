<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .bg-slate-200 {
            height: 100%;
        }
    </style>
</head>

<body>


    <div class="bg-slate-200 flex">

        <div class="bg-white rounded-xl drop-shadow-2xl text-center p-2 w-1/4 m-auto">
            <h1 class="text-3xl font-bold text-center">Register</h1>
            @if ($errors->any())
                <div class="w-ful text-centerl">
                    <label for="" class="text-red-500 font-medium">{{ $errors->first() }}</label>
                </div>
            @endif

            <form action="{{ url('/register') }}" method="post" class="mt-2 gap-4 flex flex-col p-2">
                @csrf
                <input class="p-3 rounded-2xl  bg-slate-200" type="text" name="name" placeholder="Name"
                    value={{ old('name') }}>
                <input class="p-3 rounded-2xl bg-slate-200" type="email" name="email" placeholder="Email"
                    value={{ old('email') }}>
                <input class="p-3 rounded-2xl bg-slate-200" type="password" name="password" placeholder="Password"
                    value={{ old('password') }}>
                <input class="p-3 rounded-2xl bg-slate-200" type="password" name="cpassword"
                    placeholder="Confirm Password" value={{ old('cpassword') }}>
                <input class="p-3 rounded-2xl bg-black text-white font-medium" type="submit" value="register">
            </form>
            <p class="text-slate-400">or</p>

            <p>Have account ? <a href="{{ url('/login') }}" class="text-blue-400">Login</a></p>


        </div>

    </div>



</body>

</html>
