@extends('layouts.app')

@section('style')
<!-- import another style file -->
<style>
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 30px !important;
    }
</style>
@endsection

@section('main')

<x-banners></x-banners>

<div class="container mx-auto py-20 max-sm:px-4">
    <div class="grid grid-rows-2 gap-10">
        <div class="grid md:grid-cols-2 gap-5 md:gap-10">
            <div class="order-1">
                <img data-src="{{ asset('assets/images/about-1.png') }}" alt="" class="lazy w-full shadow-lg filter brightness-[80%]">
            </div>
            <div class="order-2 text-md font-light md:flex md:flex-col md:items-center md:justify-evenly max-sm:text-justify">
                <p>Setianita Megah Motor or Honda Setianita Tebet is an official dealer or authorized Honda car dealer which has been established since July 28 1988. This dealer is also often known as Honda Tebet. Because the location is in the Tebet area, precisely on Jalan Prof. Dr. Soepomo number 44, South Jakarta.</p>
                <p>Apart from serving car needs, Honda Tebet also provides regular maintenance services. Apart from that, we provide various kinds of original spare parts or what is often called 3S, namely Sales maintenance, Sparepart Service. Here there are various types of cars that can accompany your trip with ready stock status. Therefore, you don't have to wait long to get the car of your choice when the payment process is complete.</p>
                <p>Apart from serving car needs, Honda Tebet also provides regular maintenance services. Apart from that, we provide various kinds of original spare parts or what is often called 3S, namely Sales maintenance, Sparepart Service. Here there are various types of cars that can accompany your trip with ready stock status. Therefore, you don't have to wait long to get the car of your choice when the payment process is complete.</p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-5 md:gap-10">
            <div class="order-1 md:order-2">
                <img data-src="{{ asset('assets/images/about-2.png') }}" alt="" class="lazy w-full shadow-lg filter brightness-[80%]">
            </div>
            <div class="order-2 md:order-1 text-md font-light flex flex-col items-center justify-evenly md:text-right max-sm:text-justify">
                <p>Setianita Megah Motor or Honda Setianita Tebet is an official dealer or authorized Honda car dealer which has been established since July 28 1988. This dealer is also often known as Honda Tebet. Because the location is in the Tebet area, precisely on Jalan Prof. Dr. Soepomo number 44, South Jakarta.</p>
                <p>Apart from serving car needs, Honda Tebet also provides regular maintenance services. Apart from that, we provide various kinds of original spare parts or what is often called 3S, namely Sales maintenance, Sparepart Service. Here there are various types of cars that can accompany your trip with ready stock status. Therefore, you don't have to wait long to get the car of your choice when the payment process is complete.</p>
                <p>Apart from serving car needs, Honda Tebet also provides regular maintenance services. Apart from that, we provide various kinds of original spare parts or what is often called 3S, namely Sales maintenance, Sparepart Service. Here there are various types of cars that can accompany your trip with ready stock status. Therefore, you don't have to wait long to get the car of your choice when the payment process is complete.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- code -->
@endsection