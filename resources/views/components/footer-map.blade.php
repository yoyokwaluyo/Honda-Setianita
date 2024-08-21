<footer class="bg-black py-8 pb-6 px-3 md:px-10 max-w-[1800px] mx-auto">
    <div class="grid grid-cols-3 md:grid-cols-6 gap-4 text-white">
        <div class="col-span-3 md:col-span-2">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo-honda-white.png') }}" class="h-8" alt="Honda Setianita Tebet" />
            </a>
            <div class="mt-10">
                <h4 class="text-xl font-medium uppercase">Honda Setianita Tebet</h4>
                <p class="text-sm font-light">Authorized Dealer</p>
                <p class="text-sm font-light mt-8 mb-5">PT. Setianita Megah Motor<br> Jl. Prof DR Soepomo SH No. 44 <br> Tebet, Jakarta Selatan 12870</p>
                <div class="relative">
                    <a href="#" data-tooltip-target="tooltip-top" data-tooltip-placement="top">
                        <i class='bx bxl-whatsapp text-4xl'></i>
                    </a>
                    <div id="tooltip-top" role="tooltip" class="absolute z-10 invisible mb-[10px!important] inline-block px-3 py-2 text-sm font-light text-white bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Whatsapp Dealer
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h4 class="font-medium h-8">Quick Links</h4>
            <div class="mt-4 md:mt-10">
                <div class="grid gap-4">
                    <a href="#" class="font-light hover:font-normal transition duration-150 ease-out hover:ease-in">Our Business</a>
                    <a href="#" class="font-light hover:font-normal transition duration-150 ease-out hover:ease-in">About</a>
                    <a href="#" class="font-light hover:font-normal transition duration-150 ease-out hover:ease-in">Careers</a>
                </div>
            </div>
        </div>
        <div class="col-span-2 md:col-auto">
            <h4 class="font-medium h-8">Get In Touch With</h4>
            <div class="mt-4 md:mt-10">
                <div class="grid gap-4">
                    <div>
                        <h4 class="font-normal">Margarita</h4>
                        <h4 class="font-normal">Honda Setianita Consultant</h4>
                    </div>
                    <div>
                        <a href="#" class="flex items-center gap-1 text-xs group">
                            <i class='bx bx-envelope text-xl'></i>
                            <span class="group-hover:font-semibold">margarita@hondasetianita.com</span>
                        </a>
                        <a href="#" class="flex items-center gap-1 text-xs group">
                            <i class='bx bxs-phone-call text-xl'></i>
                            <span class="group-hover:font-semibold">0811 0811 811</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 md:col-span-2">
            <!-- show gmaps -->
            <div class="w-full h-[300px]" id="map"></div>
        </div>
    </div>
</footer>

<style>
    .gm-style-iw-ch {
        padding-top: 0;
    }
    .gm-ui-hover-effect {
        width: 30px !important;
        height: 30px !important;
    }
    .gm-ui-hover-effect span {
        width: 20px !important;
        height: 20px !important;
        margin: 6px !important;
    }
</style>
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB5bB8aJk76T30fMjo7OkY3kjn_bggcCYo", v: "weekly"});</script>
