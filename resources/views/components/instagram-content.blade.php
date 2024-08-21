<div class="bg-gray-50 py-10">
    <div class="container mx-auto">
        <div class="flex items-center gap-5 p-4 md:p-0">
            <div class="w-10 md:w-20 h-10 md:h-20 rounded-full bg-black/90 flex items-center justify-center">
                <i class='bx bxl-instagram text-white text-2xl md:text-5xl'></i>
            </div>
            <div class="font-medium text-xl">Honda Setianita Tebet</div>
        </div>
        <div class="mt-3 md:mt-10 grid grid-cols-3 md:grid-cols-5 gap-1 p-4 md:p-0">
            @for ($a = 1; $a<=5; $a++)
            <div class="relative w-full bg-gray-100 group cursor-pointer">
                <img data-src="https://ramo-instagram.s3.ap-southeast-1.amazonaws.com/instagram-generator/17981804852554952.png" alt="" class="lazy w-full h-[150px] md:h-[250px] object-contain object-center group-hover:filter group-hover:brightness-[80%] transition duration-150 ease-out group-hover:ease-in">
                <div class="hidden group-hover:flex group-hover:items-center group-hover:justify-center group-hover:gap-3 absolute top-1/2 left-0 w-full">
                    <div class="flex items-center justify-center gap-1">
                        <i class='bx bxs-heart text-white'></i>
                        <span class="text-white font-medium text-xs md:text-sm">501</span>
                    </div>
                    <div class="flex items-center justify-center gap-1">
                        <i class='bx bxs-comment bx-flip-horizontal text-white'></i>
                        <span class="text-white font-medium text-xs md:text-sm">501</span>
                    </div>
                </div>
            </div>
            @endfor
            @for ($a = 1; $a<=5; $a++)
            <div class="relative w-full bg-gray-100 group cursor-pointer">
                <img data-src="https://ramo-instagram.s3.ap-southeast-1.amazonaws.com/instagram-generator/18023472617218575.png" alt="" class="lazy w-full h-[150px] md:h-[250px] object-contain object-center group-hover:filter group-hover:brightness-[80%] transition duration-150 ease-out group-hover:ease-in">
                <div class="hidden group-hover:flex group-hover:items-center group-hover:justify-center group-hover:gap-3 absolute top-1/2 left-0 w-full">
                    <div class="flex items-center justify-center gap-1">
                        <i class='bx bxs-heart text-white'></i>
                        <span class="text-white font-medium text-xs md:text-sm">501</span>
                    </div>
                    <div class="flex items-center justify-center gap-1">
                        <i class='bx bxs-comment bx-flip-horizontal text-white'></i>
                        <span class="text-white font-medium text-xs md:text-sm">501</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div class="mt-10 text-center">
            <a href="{{ route('home') }}" class="text-sm text-center w-[250px] rounded-md mx-auto bg-black/90 text-white p-3.5 transition duration-150 ease-out hover:ease-in hover:opacity-80">Load More</a>
            <a href="{{ route('home') }}" class="text-sm text-center w-[250px] rounded-md mx-auto ml-3 bg-blue-500 text-white p-3.5 transition duration-150 ease-out hover:ease-in hover:bg-blue-700">
                <i class='bx bxl-instagram text-white text-2xl align-middle'></i>
                Follow On Instagram
            </a>
        </div>
    </div>
</div>