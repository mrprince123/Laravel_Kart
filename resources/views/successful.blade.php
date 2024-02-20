@extends('Layout.main')

@push('title')
    <title>Thanks</title>
@endpush


@section('main-section')
    <div class="bg-slate-200 mt-20 mb-20 p-10 w-1/2 text-center flex flex-col items-center m-auto">
        <h1 class="text-4xl font-bold text-black">Thanks You !</h1>
        <p class="font-medium mt-5">Thanks you for messaging Laraval <span class="text-black font-bold">Kart</span>. You will
            received an email message shortly.</p>
        <img class="w-1/3 m-5"
            src="https://res.cloudinary.com/sniperdocs/image/upload/v1708451342/tick-removebg-preview_tnuqer.png"
            alt="A Tick Logo">
        <h1 class="text-4xl font-bold text-black">Check your Email</h1>
        <p class="mt-5 font-medium">If you didn't receive any mail contact <span class="text-blue-500"><a href="">laraval@kart.com</a></span>
        </p>
        <a href="{{url('/')}}" class="bg-black text-white font-medium p-2 m-2">Home</a>
</div>
  
@endsection
