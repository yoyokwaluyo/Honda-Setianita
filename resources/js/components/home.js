import { Tabs } from "flowbite";
import { Lazyload } from "./functions";

const tabsElement = document.getElementById('banner-tabs');

// create an array of objects with the id, trigger element (eg. button), and the content element
const tabElements = [
    {
        id: "profile-tab",
        triggerEl: document.querySelector("#profile-tab"),
        targetEl: document.querySelector("#profile"),
    },
    {
        id: "history-tab",
        triggerEl: document.querySelector("#history-tab"),
        targetEl: document.querySelector("#history"),
    },
    {
        id: "business-tab",
        triggerEl: document.querySelector("#business-tab"),
        targetEl: document.querySelector("#business"),
    },
];

// options with default values
const options = {
    defaultTabId: "profile-tab",
    activeClasses: "relative group w-full inline-block rounded-t-lg text-white md:text-black text-xl font-light text-start p-0 md:pl-16 uppercase",
    inactiveClasses: "relative group w-full inline-block rounded-t-lg text-white md:text-black text-xl font-light text-start p-0 md:pl-16 uppercase hover:font-medium",
    onShow: (id) => {
        var active = $("#"+id._activeTab.id);
        active.addClass("relative group w-full inline-block rounded-t-lg text-white md:text-black text-xl font-bold uppercase text-start p-0 md:pl-16 current");

        var tabs = id._items;
        tabs.forEach(element => {
            if (id._activeTab.id != element['id']) {
                document.querySelector("#"+element['id']).classList.remove("current");
            }
        });

        // show lazyload
        Lazyload.init();
    },
};

// instance options with default values
const instanceOptions = {
    id: "banner-tabs",
    override: true,
};

const bannerTabs = new Tabs(tabsElement, tabElements, options, instanceOptions);

bannerTabs;