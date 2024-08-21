@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<x-banners></x-banners>

<div class="relative">
    <img data-src="{{ asset('assets/images/banner-2.jpg') }}" alt="" class="lazy w-full filter brightness-[80%] md:h-auto h-[350px] object-cover object-center bg-black/90">
    <div class="absolute top-[10%] md:top-1/3 left-8 md:left-[10%] text-white w-fit md:w-1/3 pr-8" style="text-shadow: #aaa 1px 0 1px;">
        <h4 class="text-xl md:text-2xl font-medium uppercase">About US</h4>
        <p class="text-sm md:text-xl font-light mt-3">A leading company in the automotive industry with two Honda dealerships located in Jakarta, Indonesia. Our mission is to provide the best deals on the latest Honda cars to our customers.</p>
    </div>
</div>

<x-banner-tabs></x-banner-tabs>

<x-lineup-models></x-lineup-models>

<div>
    <div class="text-center text-2xl md:text-3xl font-normal py-8">Honda Promotion this month</div>
    <img data-src="{{ asset('assets/images/banner-promo.jpg') }}" alt="" class="w-full lazy filter brightness-[80%]">
</div>

<x-instagram-content></x-instagram-content>

<div class="container mx-auto py-10">
    <div class="text-2xl md:text-3xl font-normal text-center">Learn More About Us</div>
    <div class="grid md:grid-cols-3 gap-4 mt-10 mx-4 md:mx-0">
        <div>
            <img data-src="{{ asset('assets/images/about-1.jpg') }}" alt="" class="w-full lazy filter brightness-[80%]">
            <div class="b border-l-[10px] border-black/90 my-4 pl-4">
                <div class="text-xs font-light mb-2">Lorem ipsum dolor</div>
                <div class="text-xl md:text-3xl uppercase line-clamp-2 mb-2">Lorem ipsum dolor sit amet</div>
                <a href="#" class="text-xs text-blue-500 uppercase hover:font-normal hover:text-blue-700 transition duration-150 ease-in cursor-pointer">Lorem ipsum dolor</a>
            </div>
        </div>
        <div>
            <img data-src="{{ asset('assets/images/about-2.jpg') }}" alt="" class="w-full lazy filter brightness-[80%]">
            <div class="b border-l-[10px] border-black/90 my-4 pl-4">
                <div class="text-xs font-light mb-2">Lorem ipsum dolor</div>
                <div class="text-xl md:text-3xl uppercase line-clamp-2 mb-2">Lorem ipsum dolor sit amet</div>
                <a href="#" class="text-xs text-blue-500 uppercase hover:font-normal hover:text-blue-700 transition duration-150 ease-in cursor-pointer">Lorem ipsum dolor</a>
            </div>
        </div>
        <div>
            <img data-src="{{ asset('assets/images/about-3.jpg') }}" alt="" class="w-full lazy filter brightness-[80%]">
            <div class="b border-l-[10px] border-black/90 my-4 pl-4">
                <div class="text-xs font-light mb-2">Lorem ipsum dolor</div>
                <div class="text-xl md:text-3xl uppercase line-clamp-2 mb-2">Lorem ipsum dolor sit amet</div>
                <a href="#" class="text-xs text-blue-500 uppercase hover:font-normal hover:text-blue-700 transition duration-150 ease-in cursor-pointer">Lorem ipsum dolor</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ mix('js/home.js') }}" defer></script>
@endsection