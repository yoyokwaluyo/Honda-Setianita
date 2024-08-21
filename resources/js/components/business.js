"use strict";

// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, Parallax } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

import { Lazyload } from "./functions";

// init Swiper:
const swiper = new Swiper(".mySwiper", {
    lazy: true,
    loop: true,
    speed: 1000,
    parallax: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // onAny(eventName, ...args) {
    //     console.log("Event: ", eventName);
    //     console.log("Event data: ", args);
    // },
    // configure Swiper to use modules
    modules: [Navigation, Parallax],
});
