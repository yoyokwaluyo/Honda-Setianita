@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<x-banners></x-banners>

<div class="container mx-auto py-16 max-sm:px-4">
    <div class="grid md:grid-cols-5 gap-5 md:gap-20 items-center">
        <div class="md:col-span-2 order-2 md:order-1">
            <img data-src="{{ asset('assets/images/profile-staff-1.png') }}" alt="" class="w-full lazy filter brightness-[80%]">
        </div>
        <div class="md:col-span-3 order-1 md:order-2 text-lg md:text-xl">
            <h2 class="text-2xl md:text-3xl font-medium">Experience the Best Deals</h2>
            <h3 class="text-lg md:text-xl font-light mb-5 md:mb-10">Our Commitment</h3>
            <p>We are committed to providing the best deals and customer service in the automotive industry.</p>
            <p>Our team of experts is dedicated to ensuring that our customers have a stress-free experience when purchasing a Honda car from us.</p>
        </div>
    </div>
    <div class="grid md:grid-cols-5 gap-5 md:gap-20 items-center max-sm:mt-20">
        <div class="md:col-span-2 order-2">
            <img data-src="{{ asset('assets/images/profile-staff-2.png') }}" alt="" class="w-full lazy filter brightness-[80%]">
        </div>
        <div class="md:col-span-3 order-1 text-lg md:text-xl md:text-right">
            <h2 class="text-2xl md:text-3xl font-medium">Customer Service in Jakarta</h2>
            <h3 class="text-lg md:text-xl font-light mb-5 md:mb-10">Our Commitment</h3>
            <p>We are committed to providing the best deals and customer service in the automotive industry.</p>
            <p>Our team of experts is dedicated to ensuring that our customers have a stress-free experience when purchasing a Honda car from us.</p>
        </div>
    </div>
</div>
<div class="bg-black py-16 md:py-24">
    <div class="container mx-auto max-sm:px-4">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div class="grid gap-6 text-white text-xl font-light">
                <p>OUR PARTNERS</p>
                <p>We Partner with the Best Brands in the Industry</p>
                <p>We believe in working with the best brands in the industry to provide our customerswith the best products and services.</p>
                <p>Our partners include leading brands in the automotive, technology, and finance industries.</p>
            </div>
            <div class="flex items-center justify-between md:w-[200px] md:h-[200px] flex-wrap md:ml-auto md:gap-x-6">
                <div>
                    <img data-src="{{ asset('assets/images/profile-footer-1.png') }}" alt="" class="lazy h-20">
                </div>
                <div>
                    <img data-src="{{ asset('assets/images/profile-footer-2.png') }}" alt="" class="lazy h-10 md:mr-6">
                </div>
                <div>
                    <img data-src="{{ asset('assets/images/profile-footer-3.png') }}" alt="" class="lazy h-10 md:ml-3">
                </div>
                <div>
                    <img data-src="{{ asset('assets/images/profile-footer-4.png') }}" alt="" class="lazy h-12">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<!-- code -->
@endsection