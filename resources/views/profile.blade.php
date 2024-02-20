@extends('Layout.main')

@push('title')
    <title>Profile</title>
@endpush

@section('main-section')
    <div class="w-1/4 m-auto bg-slate-200 p-2 mt-20 mb-20">
        <img src="https://cdn.pixabay.com/photo/2017/08/02/23/58/people-2574170_1280.jpg" alt="">
        <h1 class="font-medium">Name: {{ $user->name }}</h1>
        <h1>Email: {{ $user->email }}</h1>
    </div>
@endsection
