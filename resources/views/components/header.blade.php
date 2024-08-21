<div class="w-full fixed top-0 left-0 z-[1021]">
    <nav class="{{ request()->routeIs('explore') ? 'bg-black/90' : 'bg-transparent' }} font-roboto max-w-[1800px] mx-auto transition duration-500 ease-out" id="navbars">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto h-full md:h-24 py-4 px-3 md:px-10 text-white">
            <a href="{{ route('home') }}">
                <div class="hidden md:block order-0 text-xl font-medium">Honda Setianita</div>
            </a>
            <a href="{{ route('home') }}" class="flex items-center order-0 md:order-1">
                <img src="{{ asset('assets/images/logo-honda-white.png') }}" class="h-8" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto max-sm:mt-6 max-sm:border-t max-sm:border-white" id="navbar-default">
                <ul class="flex flex-row justify-evenly gap-10 font-light px-3 py-4 md:px-0 md:py-0 max-sm:mt-2">
                    <li class="">
                        <a href="{{ route('our_business') }}" class="nav-links hover:font-normal transition duration-150 ease-out hover:ease-in">
                            <span style="text-shadow: #aaa 1px 0 10px;">Our Business</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('about_us') }}" class="nav-links hover:font-normal transition duration-150 ease-out hover:ease-in">
                            <span style="text-shadow: #aaa 1px 0 10px;">About</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('careers') }}" class="nav-links hover:font-normal transition duration-150 ease-out hover:ease-in">
                            <span style="text-shadow: #aaa 1px 0 10px;">Careers</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>