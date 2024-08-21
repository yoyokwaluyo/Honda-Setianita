@if ($footer)
<footer class="border-t border-black py-7">
    <div class="container mx-auto">
        <div class="flex items-center justify-between max-sm:flex-col-reverse max-sm:gap-6">
            <div class="text-xs font-light">Copyright © 2024 Honda Setianita</div>
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-honda-black.png') }}" alt="" class="h-7">
                </a>
            </div>
        </div>
    </div>
</footer>
@else
<footer>
    <div class="container mx-auto mb-6 max-sm:px-4">
        <div class="flex max-sm:flex-col items-center justify-between h-[200px]">
            <div class="flex flex-col justify-evenly h-full max-sm:w-full">
                <div class="text-3xl font-medium">Honda Setianita</div>
                <div class="font-light text-sm flex flex-col gap-4">
                    <div>
                        <p>Tebet Cinere, Jakarta Selatan Depok</p>
                        <p>12345, Indonesia</p>
                    </div>
                    <div>
                        <p>Phone : 021 - 1234 5678</p>
                        <p>Email : tebetcinere@hondasetianita.com</p>
                    </div>
                </div>
            </div>
            <div class="max-sm:text-start max-sm:w-full">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-honda-black.png') }}" alt="" class="h-7 md:h-10 max-sm:mt-4">
                </a>
            </div>
        </div>
    </div>
    <div class="border-t border-black py-7">
        <div class="container mx-auto max-sm:px-4">
            <div class="text-xs font-light">Copyright © 2024 Honda Setianita</div>
        </div>
    </div>
</footer>
@endif