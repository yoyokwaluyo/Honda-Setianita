@extends('layouts.app')

@section('style')
<!-- import another style file -->
<style>
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 30px !important;
        color: #000 !important;
    }
    .swiper-button-prev, 
    .swiper-button-next {
        background-color: transparent !important;
    }
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: transparent !important;
    }
</style>
@endsection

@section('main')

<x-banners></x-banners>

<div class="bg-gray-50 py-10">
    <div class="container mx-auto">
        <div class="text-xl md:text-3xl font-medium text-center">Honda Setianita</div>
        <div class="text-center text-lg md:text-2xl font-light mt-8">
            is a company in automotive industries, with 2 Honda dealerships in Jakarta. <br>
            This is a great place to expand on the title and any relevant details or information.
        </div>
    </div>
</div>

<div class="py-10 container mx-auto">
    <!-- Swiper -->
    <div class="relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid md:grid-cols-5">
                        <div class="col-span-2 px-10 py-5 h-full order-2 md:-order-none flex flex-col justify-around" data-swiper-parallax-duration="1500" data-swiper-parallax-y="100%">
                            <div class="text-xl md:text-3xl mb-2 md:mb-0 font-medium uppercase">Honda Tebet</div>
                            <div class="font-light text-sm md:text-lg mb-2 md:mb-0">
                                <p class="mb-2">At My Site, we sell the latest Honda cars, including the Civic, Accord, and CR-V.</p>
                                <p class="mb-2">Our team of experts is available to help you find the perfect car that suits your needs and budget.</p>
                            </div>
                            <div>
                                <a href="#" class="flex items-center my-3 w-full md:w-1/2 border border-black/80 py-2 pr-6 rounded-lg hover:bg-black/90 hover:text-white transition duration-500 ease-in-out group">
                                    <span class="mx-auto">See Virtual Tour</span>
                                    <i class='bx bx-right-arrow-alt ml-auto text-xl'></i>
                                </a>
                                <a href="#" class="flex items-center my-3 w-full md:w-1/2 border border-black/80 py-2 pr-6 rounded-lg hover:bg-black/90 hover:text-white transition duration-500 ease-in-out group">
                                    <span class="mx-auto">Visit Site</span>
                                    <i class='bx bx-right-arrow-alt ml-auto text-xl'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-span-3 px-4 md:px-10 order-1 md:-order-none" data-swiper-parallax-x="-100%" data-swiper-parallax-duration="1000">
                            <img data-src="{{ asset('assets/images/img-tebet.jpg') }}" alt="" class="lazy w-full rounded-xl shadow-xl filter brightness-[80%]" data-swiper-parallax-scale="0.15">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid md:grid-cols-5">
                        <div class="col-span-2 px-10 py-5 h-full order-2 md:-order-none flex flex-col justify-around" data-swiper-parallax-duration="1500" data-swiper-parallax-y="100%">
                            <div class="text-xl md:text-3xl mb-2 md:mb-0 font-medium uppercase">Honda Cinere</div>
                            <div class="font-light text-sm md:text-lg mb-2 md:mb-0">
                                <p class="mb-2">At My Site, we sell the latest Honda cars, including the Civic, Accord, and CR-V.</p>
                                <p class="mb-2">Our team of experts is available to help you find the perfect car that suits your needs and budget.</p>
                            </div>
                            <div>
                                <a href="#" class="flex items-center my-3 w-full md:w-1/2 border border-black/80 py-2 pr-6 rounded-lg hover:bg-black/90 hover:text-white transition duration-500 ease-in-out group">
                                    <span class="mx-auto">See Virtual Tour</span>
                                    <i class='bx bx-right-arrow-alt ml-auto text-xl'></i>
                                </a>
                                <a href="#" class="flex items-center my-3 w-full md:w-1/2 border border-black/80 py-2 pr-6 rounded-lg hover:bg-black/90 hover:text-white transition duration-500 ease-in-out group">
                                    <span class="mx-auto">Visit Site</span>
                                    <i class='bx bx-right-arrow-alt ml-auto text-xl'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-span-3 px-4 md:px-10 order-1 md:-order-none" data-swiper-parallax-x="-100%" data-swiper-parallax-duration="1000">
                            <img src="{{ asset('assets/images/img-cinere.jpg') }}" alt="" class="w-full rounded-xl shadow-xl filter brightness-[80%]" data-swiper-parallax-scale="0.15">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next text-[#000!important] max-sm:top-[60%!important] right-[0%!important] md:right-[-4%!important]"></div>
        <div class="swiper-button-prev text-[#000!important] max-sm:top-[60%!important] left-[0%!important] md:left-[-4%!important]"></div>
    </div>
</div>

<x-lineup-models></x-lineup-models>

<div class="relative mb-6">
    <img data-src="{{ asset('assets/images/banner-page-2-2.jpg') }}" alt="" class="lazy w-full object-cover object-center max-sm:h-[500px] filter brightness-[80%]">
    <div class="absolute left-0 md:left-[6%] top-0 max-sm:px-4 text-white w-full md:w-1/3 h-full">
        <div class="flex flex-col justify-center gap-10 h-full">
            <div>
                <div class="text-xl md:text-3xl font-medium mb-2">HONDA DIGITAL EXPERIENCE</div>
                <div class="text-sm font-light">
                    <p class="mb-2">We have developed a range of digital products that are designed to enhance your driving experience.</p>
                    <p>From our app that provides real-time information about your vehicle, to our advanced cybersecurity measures, we always put your safety and convenience first.</p>
                </div>
            </div>
            <div>
                <div class="text-xl md:text-3xl font-medium mb-2">CUSTOMER PRIVACY</div>
                <div class="text-sm font-light">
                    <p class="mb-2">At Honda Setianita, we take your privacy seriously. That's why we have implemented advanced cybersecurity measures to protect your personal information.</p>
                </div>
            </div>
            <div>
                <div class="text-xl md:text-3xl font-medium mb-2">REAL-TIME SUPPORT</div>
                <div class="text-sm font-light">
                    <p class="mb-2">We understand that things can go wrong, which is why we offer real-time support to our customers. Our team of experts are always on hand to help you with any issues you may be experiencing.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ mix('js/business.js') }}" defer></script>
@endsection