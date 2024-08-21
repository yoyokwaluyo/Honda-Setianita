@extends('layouts.app')

@section('style')
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
@endsection

@section('main')

<div class="w-full h-[60vh] mt-24 max-sm:mt-[4.5rem]" id="map"></div>
<div class="md:w-2/3 max-sm:px-4 mx-auto py-10 mb-32">
    <h2 class="text-3xl font-normal">Dealer Honda Setianita</h2>
    <div class="grid grid-cols-2 max-sm:grid-cols-1 max-sm:gap-4 gap-10 mt-10">
        <div class="flex gap-2">
            <div><i class='bx bxs-map text-red-600 text-xl'></i></div>
            <div>
                <h3 class="text-xl font-normal mb-1">Honda Tebet</h3>
                <p class="text-sm font-light mb-1">Jl. Prof DR Soepomo SH No. 44 Tebet - Pancoran Jakarta Selatan, DKI Jakarta</p>
                <p class="text-sm font-light">Telepon: +62 021 8302060</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 items-center">
            <a href="{{ URL::to('/'); }}/tebet" class="p-1.5 rounded-lg text-red-600 border border-red-600 flex items-center justify-center gap-1 hover:bg-red-600 hover:text-white transition duration-500 ease-in-out group">
                <i class='bx bxs-map text-red-600 text-xl group-hover:text-white transition duration-500 ease-in-out'></i>
                <span class="text-sm font-light">Lihat Dealer</span>
            </a>
            <a href="tel:+620218302060" class="p-1.5 rounded-lg text-red-600 border border-red-600 flex items-center justify-center gap-1 hover:bg-red-600 hover:text-white transition duration-500 ease-in-out group">
                <i class='bx bxs-phone text-red-600 text-xl group-hover:text-white transition duration-500 ease-in-out'></i>
                <span class="text-sm font-light">Hubungi Dealer</span>
            </a>
        </div>
    </div>
    <div class="grid grid-cols-2 max-sm:grid-cols-1 max-sm:gap-4 gap-10 mt-10">
        <div class="flex gap-2">
            <div><i class='bx bxs-map text-red-600 text-xl'></i></div>
            <div>
                <h3 class="text-xl font-normal mb-1">Honda Megah Cinere</h3>
                <p class="text-sm font-light mb-1">JL. Raya Cinere No. 88 Limo Cinere Depok, Jawa Barat</p>
                <p class="text-sm font-light">Telepon: +62 021 7532288</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 items-center">
            <a href="{{ URL::to('/'); }}/cinere" class="p-1.5 rounded-lg text-red-600 border border-red-600 flex items-center justify-center gap-1 hover:bg-red-600 hover:text-white transition duration-500 ease-in-out group">
                <i class='bx bxs-map text-red-600 text-xl group-hover:text-white transition duration-500 ease-in-out'></i>
                <span class="text-sm font-light">Lihat Dealer</span>
            </a>
            <a href="tel:+620217532288" class="p-1.5 rounded-lg text-red-600 border border-red-600 flex items-center justify-center gap-1 hover:bg-red-600 hover:text-white transition duration-500 ease-in-out group">
                <i class='bx bxs-phone text-red-600 text-xl group-hover:text-white transition duration-500 ease-in-out'></i>
                <span class="text-sm font-light">Hubungi Dealer</span>
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB5bB8aJk76T30fMjo7OkY3kjn_bggcCYo", v: "weekly"});</script>
<script src="{{ mix('js/maps.js') }}"></script>
@endsection