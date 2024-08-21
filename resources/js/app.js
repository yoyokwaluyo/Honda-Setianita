"use strict"

import './bootstrap';
import 'flowbite';
import jQuery from 'jquery';
window.$ = jQuery;

import { 
    Loading, 
    Header,
    MyBanners,
    Lazyload
} from "./components/functions";

$(function () {
    Loading.show();
    Loading.hide(500);

    Header.init();
    MyBanners.init();
    Lazyload.init();
});