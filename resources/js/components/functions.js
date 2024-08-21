// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, Parallax } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const MyBanners = {
    init: function () {
        const swiper = new Swiper(".myBanners", {
            lazy: true,
            autoplay: true,
            speed: 1000,
            parallax: true,
            dynamicBullets: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // configure Swiper to use modules
            modules: [Navigation, Parallax, Autoplay],
        });
    },
};

// loading screen
const Loading = {
    show: function () {
        document.querySelector("body").style.overflow = "hidden";
        $("#pre-loader").show();
    },
    hide: function (timeout) {
        setTimeout(() => {
            $("#pre-loader").hide();
            document.querySelector("body").style.overflow = "auto";
        }, timeout);
    },
};

// custom navbar header
const Header = {
    init: function () {
        let navbar = document.querySelector("#navbars");
        let height = window.screen.availHeight / 2;
        let pathName = window.location.pathname;

        window.addEventListener("scroll", function () {
            if (!pathName.includes("explore")) {
                if (this.window.scrollY > height) {
                    navbar.classList.remove("bg-transparent");
                    navbar.classList.add("bg-black/90");
                } else {
                    navbar.classList.add("bg-transparent");
                    navbar.classList.remove("bg-black/90");
                }
            }
        });
    },
};

const Lazyload = {
    init: function () {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0,
            visibleOnly: true,
            // beforeLoad: function (element) {
            //     console.log("on Load "+ element.data("src"));
            // },
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            }
        });
    },
};

export { Loading, Header, MyBanners, Lazyload };
