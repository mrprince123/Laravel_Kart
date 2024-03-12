@extends('Layout.main')

@push('title')
    <title>Orders</title>
@endpush

@section('main-section')
    {{-- show the Orders  --}}
    <div class="bg-white w-1/2 m-auto">
        <div class="bg-slate-50  p-2 drop-shadow-xl m-4 rounded-xl">
            <h2 class="font-medium text-blue-400 text-xl">Note:</h2>
            <p>Wait for sometime we will update your data once your order will be confirm from the seller. Thanks You</p>
        </div>

        <h1 class="font-medium text-xl">Your Orders</h1>
        @foreach ($orders as $value)
            <div class="bg-slate-50 m-4 p-2 flex items-center drop-shadow-xl rounded-xl">
                <img class=" h-24 m-2 object-contain"
                    src="https://res.cloudinary.com/sniperdocs/image/upload/v1708451342/tick-removebg-preview_tnuqer.png"
                    alt="A Tick Logo">
                <div>
                    <p>Payment Method :{{ $value->payment_method }}</p>
                    <p>Order Status :{{ $value->order_status }}</p>
                    <p>Payment Status :{{ $value->payment_status }}</p>
                    <p>Total Amount :{{ $value->total_amount }}</p>
                </div>

            </div>
        @endforeach
    </div>
@endsection
