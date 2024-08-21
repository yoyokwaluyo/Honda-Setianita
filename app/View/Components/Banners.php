<?php

namespace App\View\Components;

use Closure;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banners extends Component
{
    public $pages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        switch (Request()->route()->getName()) {
            case 'home':
                $this->pages = [
                    ['image' => asset('assets/images/banner-page-1.jpg'),
                    'title' => 'Discover Our Company Profile']
                ];
                break;
            case 'our_business':
                $this->pages = [
                    ['image' => asset('assets/images/banner-page-2.jpg'),
                    'title' => 'Our Business']
                ];
                break;
            case 'about_us':
                $this->pages = [
                    ['image' => asset('assets/images/banner-page-3.jpg'),
                    'title' => 'About Us']
                ];
                break;
            case 'profile':
                $this->pages = [
                    ['image' => asset('assets/images/banner_profile.jpg'),
                    'title' => 'Profile']
                ];
                break;
            case 'history':
                $this->pages = [
                    ['image' => asset('assets/images/banner_history.jpg'),
                    'title' => 'History']
                ];
                break;
            case 'careers':
                $this->pages = [
                    [
                        'image' => asset('assets/images/banner-career-1.jpg'),
                        'title' => 'Career',
                    ],
                    [
                        'image' => asset('assets/images/banner-career-2.jpg'),
                        'title' => 'Career',
                    ]
                ];
                break;

            default:
                $this->pages = [
                    ['image' => asset('assets/images/banner-page-1.jpg'),
                    'title' => 'Discover Our Company Profile']
                ];
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banners');
    }
}
