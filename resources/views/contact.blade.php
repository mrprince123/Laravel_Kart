@extends('Layout.main')

@push('title')
    <title>Contact</title>
@endpush


@section('main-section')

    <div class="m-auto p-10">


        <div class="w-2/3 bg-slate-50 mb-10 mt-10 justify-between m-auto flex p-2 text-xl">

            <div class="bg-slate-200 m-2 text-center w-1/4 p-4">
                <i class="fas fa-map-marker text-black text-3xl"></i>
                <h2 class="font-bold text-black m-2">Our Main Office</h2>
                <p class="m-2 text-sm">H-Block 206A, Noida, Uttar Pradesh, India</p>
            </div>

            <div class="bg-slate-200 m-2 text-center w-1/4 p-4">
                <i class="fas fa-phone text-black text-3xl"></i>
                <h2 class="font-bold text-black m-2">Our Phone</h2>
                <p class="m-2 text-sm">+91 345-435-3454</p>
            </div>

            <div class="bg-slate-200 m-2 text-center w-1/4 p-4">
                <i class="fas fa-envelope text-black text-3xl"></i>
                <h2 class="font-bold text-black m-2">Our Mail</h2>
                <p class="m-2 text-sm">test123@gmail.com</p>
            </div>

        </div>


        <div class="m-auto w-2/3 bg-slate-200 flex">
            <div class="w-1/2 p-2 m-auto">
                <h2 class="font-bold m-2 text-xl text-black">Send a Message</h2>
                <form class="flex flex-col" action="{{ url('/') }}/contact" method="post">
                    @csrf
                    <input class="m-2 p-2 bg-white" type="text" name="name" placeholder="Your Name"
                        value={{ old('name') }}>
                    @error('name')
                        <label class="text-red-500">{{ $message }}</label>
                    @enderror
                    <input class="m-2 p-2 bg-white" type="email" name="email" placeholder="Your Email"
                        value={{ old('email') }}>
                    @error('email')
                        <label class="text-red-500">{{ $message }}</label>
                    @enderror
                    <select class="m-2 p-2 bg-white" name="purpose">
                        <option value="">Select Purpose</option>
                        <option value="complain">Complain</option>
                        <option value="problem">Problem</option>
                        <option value="feedback">feedback</option>
                        <option value="review">Review</option>
                        <option value="others">Others</option>
                    </select>

                    @error('purpose')
                        <label class="text-red-500">{{ $message }}</label>
                    @enderror
                    <textarea class="m-2 p-2 bg-white" type="text" rows="6" name="message" placeholder="Your Message"
                        value={{ old('message') }}></textarea>
                    @error('message')
                        <label class="text-red-500">{{ $message }}</label>
                    @enderror
                    <input type="submit" class="bg-black m-2 p-2 font-medium text-white" value="Send Message">
                </form>
            </div>
    
    
            <div class="w-1/2 m-auto">
                <iframe class="w-full" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224356.85923516407!2d77.23701332485031!3d28.522404035004627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1708152306895!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    
    </div>

@endsection
