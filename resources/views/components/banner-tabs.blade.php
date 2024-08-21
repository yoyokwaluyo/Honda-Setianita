<div id="banner-tabs" class="relative">
    <div class="relative md:absolute z-[1020] left-0 top-1/3 backdrop-blur-sm bg-black md:bg-white/50 w-full md:w-1/5 py-8">
        <ul class="md:flex md:flex-col grid grid-cols-2 gap-3 md:gap-8 text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#banner-tabs" role="tablist">
            <li role="presentation">
                <button class="btn-banner-tabs" id="profile-tab" data-tabs-target="#profile" type="button">
                    <div class="m-auto md:m-0">Our Profile</div>
                </button>
            </li>
            <li role="presentation">
                <button class="btn-banner-tabs" id="history-tab" data-tabs-target="#history" type="button">
                    <div class="m-auto md:m-0">Our History</div>
                </button>
            </li>
            <li role="presentation" class="col-span-2">
                <button class="btn-banner-tabs" id="business-tab" data-tabs-target="#business" type="button">
                    <div class="m-auto md:m-0">Our Business</div>
                </button>
            </li>
        </ul>
    </div>

    <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="relative">
            <img data-src="{{ asset('assets/images/banner-profile.jpg') }}" alt="" class="w-full filter brightness-[80%] lazy">

            <div class="relative md:absolute top-0 right-0 w-full md:w-[75%] h-full px-6 md:p-10">
                <div class="flex md:flex-col flex-col-reverse justify-between h-full">
                    <a href="{{ route('profile') }}" class="flex items-center justify-center font-medium text-white md:text-black bg-black/90 md:bg-white w-full md:w-[250px] my-6 md:my-0 py-2.5 ml-auto hover:opacity-80 transition duration-150 ease-out hover:ease-in">Read More</a>
                    <div class="flex md:block flex-col-reverse">
                        <p class="md:text-white font-light">We are committed to providing the best deals and customer service <br>
                            in the automotive industry. <br>
                            Our team of experts is dedicated to ensuring that our customers <br>
                            have a stress-free experience when purchasing <br>
                            a Honda car from us.</p>
                        <div class="py-3 md:p-3 backdrop-blur-sm bg-white/30 w-fit md:mt-6 text-2xl md:text-4xl font-normal">
                            Experience the best deals
                        </div>
                        <div class="hidden md:flex items-center justify-end gap-5">
                            <div class="bg-white w-[20px] h-[20px] rounded-full"></div>
                            <div class="bg-white w-[15px] h-[15px] rounded-full opacity-70"></div>
                            <div class="bg-white w-[15px] h-[15px] rounded-full opacity-70"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="history" role="tabpanel" aria-labelledby="history-tab">
        <div class="relative">
            <img data-src="{{ asset('assets/images/banner-history.jpg') }}" alt="" class="w-full filter brightness-[80%] lazy">

            <div class="relative md:absolute top-0 right-0 w-full md:w-[75%] h-full px-6 md:p-10">
                <div class="flex md:flex-col flex-col-reverse justify-between h-full">
                    <a href="{{ route('history') }}" class="flex items-center justify-center font-medium text-white md:text-black bg-black/90 md:bg-white w-full md:w-[250px] my-6 md:my-0 py-2.5 ml-auto hover:opacity-80 transition duration-150 ease-out hover:ease-in">Read More</a>
                    <div class="flex md:block flex-col-reverse">
                        <p class="md:text-white font-light">Honda Setianita was founded with a mission to provide high-quality <br>
                            vehicles and superior service to customers in Jakarta. <br>
                            From our humble beginnings, we have grown to become a leading name <br>
                            in the automotive industry in Indonesia.</p>
                        <div class="py-3 md:p-3 backdrop-blur-sm bg-white/30 w-fit md:mt-6 text-2xl md:text-4xl font-normal">
                            Our History
                        </div>
                        <div class="hidden md:flex items-center justify-end gap-5">
                            <div class="bg-white w-[15px] h-[15px] rounded-full opacity-70"></div>
                            <div class="bg-white w-[20px] h-[20px] rounded-full"></div>
                            <div class="bg-white w-[15px] h-[15px] rounded-full opacity-70"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="business" role="tabpanel" aria-labelledby="business-tab">
        <div class="relative">
            <img data-src="{{ asset('assets/images/banner-business.jpg') }}" alt="" class="w-full filter brightness-[80%] lazy">

            <div class="relative md:absolute top-0 right-0 w-full md:w-[75%] h-full px-6 md:p-10">
                <div class="flex md:flex-col flex-col-reverse justify-between h-full">
                    <a href="{{ route('our_business') }}" class="flex items-center justify-center font-medium text-white md:text-black bg-black/90 md:bg-white w-full md:w-[250px] my-6 md:my-0 py-2.5 ml-auto hover:opacity-80 transition duration-150 ease-out hover:ease-in">Read More</a>
                    <div class="flex md:block flex-col-reverse">
                        <p class="md:text-white font-light">Is a company in automotive industries, with 2 Honda dealerships in Jakarta. <br>
                            This is a great place to expand on the title and any relevant details or information.</p>
                        <div class="py-3 md:p-3 backdrop-blur-sm bg-white/30 w-fit md:mt-6 text-2xl md:text-4xl font-normal">
                            Our Business
                        </div>
                        <div class="hidden md:flex items-center justify-end gap-5">
                            <div class="bg-white shadow-md w-[15px] h-[15px] rounded-full opacity-70"></div>
                            <div class="bg-white shadow-md w-[15px] h-[15px] rounded-full opacity-70"></div>
                            <div class="bg-white shadow-md w-[20px] h-[20px] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>