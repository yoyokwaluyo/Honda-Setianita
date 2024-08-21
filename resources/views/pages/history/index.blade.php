@extends('layouts.app')

@section('style')
@endsection

@section('main')

<x-banners></x-banners>

<div class="bg-gray-100">
    <div class="container mx-auto py-16 max-sm:px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-medium mb-6">Our History</h2>
        <div class="text-lg md:text-2xl font-light">
            <p>Honda Setianita is a company in the automotive industry with two Honda dealerships in Jakarta.</p>
            <p>We are committed to providing our customers with top-quality service and a wide range of vehicles to choose from.</p>
            <p>Our experienced team is here to help you find the perfect car to suit your needs and budget.</p>
        </div>
    </div>
</div>
<div class="container mx-auto py-16 max-sm:px-4">
    <h2 class="text-2xl font-normal text-center mb-10">Our Journey So Far</h2>

    <!-- History for Desktop -->
    <div class="relative max-sm:hidden">
        <div class="grid grid-cols-2 gap-1">
            <div class="grid gap-1">
                <div class="h-[440px]">
                    <!-- line title years -->
                    <div class="w-full">
                        <div class="flex items-center justify-between relative z-0">
                            <div class="bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">1988</div>
                            <div class="absolute top-[45%] z-[-1] left-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                        </div>
                    </div>
                    <div class="ml-6 md:ml-16 mr-10 py-4 text-md font-light h-[375px] overflow-auto">
                        <h2 class="text-xl font-normal mb-3 uppercase">HONDA SETIANITA IS FOUNDED</h2>
                        <p>Honda Setianita was founded with a mission to provide high-quality vehicles and superior service to customers in Jakarta. From our humble beginnings, we have grown to become a leading name in the automotive industry in Indonesia.</p>
                        <img data-src="{{ asset('assets/images/history-1.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
                    </div>
                </div>
                <div class="h-[440px]">
                    <!-- line title years -->
                    <div class="w-full">
                        <div class="flex items-center justify-between relative z-0">
                            <div class="bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2015</div>
                            <div class="absolute top-[45%] z-[-1] left-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                        </div>
                    </div>
                    <div class="ml-6 md:ml-16 mr-10 py-4 text-md font-light h-[375px] overflow-auto">
                        <h2 class="text-xl font-normal mb-3 uppercase">HONDA CINERE DEALERSHIP OPENS</h2>
                        <p>In 2015, we opened a new Honda dealership location in Cinere, allowing us to better serve our customers in the area. The new location features state-of-the-art facilities and a wide range of vehicles to choose from.</p>
                    </div>
                </div>
                <div class="h-[220px]">
                    <!-- line title years -->
                    <div class="w-full">
                        <div class="flex items-center justify-between relative z-0">
                            <div class="bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2016</div>
                            <div class="absolute top-[45%] z-[-1] left-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                        </div>
                    </div>
                    <div class="ml-6 md:ml-16 mr-10 py-4 text-md font-light h-[375px] overflow-auto">
                        <h2 class="text-xl font-normal mb-2 uppercase">EXPANSION INTO COMMERCIAL VEHICLES</h2>
                        <p>In 2016, we expanded our offerings to include commercial vehicles, such as trucks and buses. This allowed us to serve a wider range of customers and provide even more value to the community.</p>
                    </div>
                </div>
            </div>
            <div class="grid gap-1">
                <div class="h-[220px]"></div> <!-- blank content -->
                <div class="h-[440px]">
                    <!-- line title years -->
                    <div class="flex items-center justify-between relative z-0">
                        <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                        <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">1988</div>
                    </div>
                    <div class="ml-6 md:ml-14 mr-10 py-4 md:mr-16 text-md font-light h-[375px] overflow-auto">
                        <h2 class="text-xl font-normal mb-3 uppercase">HONDA TEBET DEALERSHIP OPENS</h2>
                        <p>In 1988, we opened a new Honda dealership location in Tebet, allowing us to better serve our customers in the area. The new location features state-of-the-art facilities and a wide range of vehicles to choose from.</p>
                        <img data-src="{{ asset('assets/images/history-2.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
                    </div>
                </div>
                <div class="h-[440px]">
                    <!-- line title years -->
                    <div class="flex items-center justify-between relative z-0">
                        <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                        <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2015</div>
                    </div>
                    <div class="ml-6 md:ml-14 mr-10 py-4 md:mr-16 text-md font-light h-[375px] overflow-auto">
                        <h2 class="text-xl font-normal mb-3 uppercase">CUSTOMER SATISFACTION AWARD</h2>
                        <p>In 2015, we were proud to receive a customer satisfaction award, recognizing our commitment to providing exceptional service to our customers.</p>
                        <img data-src="{{ asset('assets/images/history-3.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
                    </div>
                </div>
            </div>
        </div>
        <!-- Circle Steps -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2">
            @for ($a=1; $a<=5; $a++)
            <!-- circle black -->
            <div class="flex items-center max-sm:hidden">
                <div class="bg-black/90 text-white flex items-center justify-center my-2 p-2 w-14 h-14 rounded-full">
                    <div class="bg-white flex items-center justify-center p-1 w-10 h-10 rounded-full">
                        <div class="bg-black/90 flex items-center justify-center p-1 w-7 h-7 rounded-full">
                            <div class="bg-white p-1 w-4 h-4 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- circle gray -->
            <div class="p-5 h-[150px] w-[50px] mx-auto max-sm:min-h-[70px] max-sm:ml-3 bg-[url('https://rajamobil.s3.ap-southeast-1.amazonaws.com/component/circle-border.png')] bg-repeat-space bg-center"></div>
            @endfor
        </div>
    </div>

    <!-- History for Mobile -->
    <div class="grid gap-8 md:hidden">
        <div>
            <!-- line title years -->
            <div class="flex items-center justify-between relative z-0">
                <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">1988</div>
            </div>
            <div class="ml-1 mr-1 py-4 text-md font-light text-justify">
                <h2 class="text-xl font-normal mb-3 uppercase">HONDA SETIANITA IS FOUNDED</h2>
                <p>Honda Setianita was founded with a mission to provide high-quality vehicles and superior service to customers in Jakarta. From our humble beginnings, we have grown to become a leading name in the automotive industry in Indonesia.</p>
                <img data-src="{{ asset('assets/images/history-1.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
            </div>
        </div>
        <div>
            <!-- line title years -->
            <div class="flex items-center justify-between relative z-0">
                <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">1988</div>
            </div>
            <div class="ml-1 mr-1 py-4 text-md font-light text-justify">
                <h2 class="text-xl font-normal mb-2 uppercase">HONDA TEBET DEALERSHIP OPENS</h2>
                <p>In 1988, we opened a new Honda dealership location in Tebet, allowing us to better serve our customers in the area. The new location features state-of-the-art facilities and a wide range of vehicles to choose from.</p>
                <img data-src="{{ asset('assets/images/history-2.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
            </div>
        </div>
        <div>
            <!-- line title years -->
            <div class="flex items-center justify-between relative z-0">
                <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2015</div>
            </div>
            <div class="ml-1 mr-1 py-4 text-md font-light text-justify">
                <h2 class="text-xl font-normal mb-2 uppercase">HONDA CINERE DEALERSHIP OPENS</h2>
                <p>In 2015, we opened a new Honda dealership location in Cinere, allowing us to better serve our customers in the area. The new location features state-of-the-art facilities and a wide range of vehicles to choose from.</p>
            </div>
        </div>
        <div>
            <!-- line title years -->
            <div class="flex items-center justify-between relative z-0">
                <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2015</div>
            </div>
            <div class="ml-1 mr-1 py-4 text-md font-light text-justify">
                <h2 class="text-xl font-normal mb-2 uppercase">CUSTOMER SATISFACTION AWARD</h2>
                <p>In 2015, we were proud to receive a customer satisfaction award, recognizing our commitment to providing exceptional service to our customers.</p>
                <img data-src="{{ asset('assets/images/history-3.jpg') }}" alt="" class="mt-8 lazy filter brightness-[80%]">
            </div>
        </div>
        <div>
            <!-- line title years -->
            <div class="flex items-center justify-between relative z-0">
                <div class="absolute top-[45%] z-[-1] right-1 w-full bg-black/90 p-1 h-fit max-sm:hidden"></div>
                <div class="max-sm:mr-auto md:ml-auto bg-black/90 text-white flex items-center justify-center p-2 w-16 h-16 rounded-full font-medium">2016</div>
            </div>
            <div class="ml-1 mr-1 py-4 text-md font-light text-justify">
                <h2 class="text-xl font-normal mb-2 uppercase">EXPANSION INTO COMMERCIAL VEHICLES</h2>
                <p>In 2016, we expanded our offerings to include commercial vehicles, such as trucks and buses. This allowed us to serve a wider range of customers and provide even more value to the community.</p>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<!-- code -->
@endsection