<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($pages as $page)
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ $page['image'] }}" alt="" class="w-full md:h-auto h-[350px] object-cover object-center bg-black/90 filter brightness-[80%]">
                <div class="absolute z-[9] w-full text-center top-1/2 text-white text-xl md:text-5xl" style="text-shadow: #aaa 1px 0 1px;" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    {{ $page['title'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>