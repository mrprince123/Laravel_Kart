@extends('Layout.main')

@push('title')
    <title>About</title>
@endpush

@section('main-section')
<div class="w-2/3 m-auto mt-10 mb-20">
    <div class="m-2 p-2 text-center mb-10 mt-10">

        <h1 class="font-bold text-2xl m-4 mb-10 text-black">ABOUT LARAVEL KART</h1>
        <img class="w-full" src="https://img1.wsimg.com/isteam/stock/D1Bw1oB/:/rs=w:1023,h:512,cg:true,m/cr=w:1023,h:512"
            alt="">

        <h3 class="text-xl font-medium text-black m-4">About Us</h3>
        <p>"Laravel Kart" is a dynamic e-commerce platform designed to revolutionize your online shopping experience. With its sleek interface and user-friendly navigation, shopping becomes a breeze. Built on the robust Laravel framework, this website ensures seamless functionality and exceptional performance.</p>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class=" m-2 p-2 text-center bg-slate-100">
            <img class="w-full"
                src="https://img1.wsimg.com/isteam/stock/RYyxr2l/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300"
                alt="">
            <h3 class="text-xl font-medium mt-2 text-black mb-2">Wide Range of Products</h3>
            <p>Laravel Kart offers an extensive selection across various categories. From trendy fashion apparel to state-of-the-art electronics, home essentials, and gourmet delights, there's something for everyone. Explore our catalog and discover items to suit your lifestyle and preferences.</p>
        </div>
        <div class="m-2 p-2 text-center bg-slate-100">
            <img class="w-full"
                src="https://img1.wsimg.com/isteam/stock/100492/:/cr=t:12.5%25,l:0%25,w:100%25,h:75%25/rs=w:600,h:300,cg:true"
                alt="">
            <h3 class="text-xl font-medium mt-2 text-black mb-2">Secure and Convenient Shopping Experience</h3>
            <p>Your security and convenience are our top priorities. Our website features robust security measures to safeguard your information and ensure secure transactions. With user-friendly navigation, seamless checkout, and multiple payment options, shopping is hassle-free. Enjoy peace of mind with every purchase.</p>
        </div>
        <div class="m-2 p-2 text-center bg-slate-100">
            <img class="w-full"
                src="https://img1.wsimg.com/isteam/stock/uA851PwDKOCxQKDAR/:/cr=t:12.5%25,l:0%25,w:100%25,h:75%25/rs=w:600,h:300,cg:true"
                alt="">
            <h3 class="text-xl font-medium mt-2 text-black mb-2">Exceptional Customer Service:</h3>
            <p>At Laravel Kart, we deliver exceptional customer service. Our support team is committed to providing prompt assistance for product inquiries, order tracking, and post-purchase support. Shop with confidence knowing help is just a click or call away.</p>
        </div>
        <div class="m-2 p-2 text-center bg-slate-100">
            <img class="w-full"
                src="https://img1.wsimg.com/isteam/stock/ukalOdpP0DfPxypk2/:/cr=t:12.53%25,l:0%25,w:100%25,h:74.93%25/rs=w:600,h:300,cg:true"
                alt="">
            <h3 class="text-xl font-medium mt-2 text-black mb-2">Stay Updated with Latest Offers and Promotions:</h3>
            <p>Stay informed about our latest offers, promotions, and exclusive deals. Sign up for our newsletter and follow us on social media for regular updates on new arrivals, special discounts, and seasonal sales. Don't miss out on fantastic savings and opportunities to elevate your shopping experience.</p>
        </div>
    </div>


    <div class="flex items-center mt-10">
        <img class="w-1/2 m-2"
            src="https://img1.wsimg.com/isteam/stock/uOkgbPQw3rhK40O8W/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1280,h:853"
            alt="">
        <div class="m-2 p-2">
            <p class="text-xl">Hello</p>
            <h2 class="text-2xl font-bold mt-2 text-black">WELCOME</h2>
            <p class="mt-2">Welcome to Laravel Kart – your ultimate destination for online shopping convenience and quality products. Step into a world where shopping meets innovation, with an extensive selection of fashion, electronics, home essentials, and more, curated to suit your lifestyle and preferences. Whether you're searching for the latest trends or timeless classics, we have something for everyone. Our user-friendly platform ensures a seamless shopping experience, with secure transactions and prompt customer support. Stay updated with our latest offers and promotions, and enjoy exclusive deals on your favorite brands. Experience the future of online shopping with Laravel Kart – where convenience, quality, and customer satisfaction reign supreme.</p>
            <a href=""><button class="bg-black mt-2 text-white font-medium p-2">FIND OUT MORE</button></a>
        </div>

    </div>

</div>
@endsection
