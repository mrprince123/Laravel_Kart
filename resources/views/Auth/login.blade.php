<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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

        <div class="bg-white rounded-xl text-center w-1/4 p-2 m-auto">
            <h1 class="text-2xl font-bold text-center">Login</h1>

            @if ($errors->any())
                <div class="w-ful text-centerl">
                    <label for="" class="text-red-500 font-medium">{{ $errors->first() }}</label>
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="mt-2 gap-4 flex flex-col p-2">
                @csrf
                <input class="p-3  bg-slate-200" type="email" name="email" placeholder="Email">
                <input class="p-3  bg-slate-200" type="password" name="password" placeholder="Password">
                <input class="p-3  bg-black text-white font-medium" type="submit" value="login">
            </form>

            <p class="text-slate-400">or</p>

            <p>Create New Account <a href="{{ url('/register') }}" class="text-blue-400">Register</a></p>

        </div>


    </div>
</body>

</html>
