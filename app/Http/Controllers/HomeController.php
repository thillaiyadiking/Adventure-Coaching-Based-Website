<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        $about_us = AboutUs::first();
        $banner_image_path = $about_us->banner_image;
        return view('about-us', compact('about_us', 'banner_image_path'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function services()
    {
        $services = Service::first();
        $banner_image_path = $services->banner_image;
        return view('services', compact('services', 'banner_image_path'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::first();
        $banner_image_path = $testimonials->banner_image;
        return view('testimonials', compact('testimonials', 'banner_image_path'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        $banner_image_path = $galleries->first()->banner_image;
        return view('gallery', compact('galleries', 'banner_image_path'));
    }
}
