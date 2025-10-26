<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
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
        return view('about-us', compact('about_us'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function services()
    {
        $services = Service::first();
        return view('services', compact('services'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::first();
        return view('testimonials', compact('testimonials'));
    }
    public function gallery()
    {
        return view('gallery');
    }
}
