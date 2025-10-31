<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\General;
use App\Models\Home;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $generals = General::first();

        return view('index', compact('home', 'generals'));
    }

    public function aboutUs()
    {
        $about_us = AboutUs::first();
        $banner_image_path = $about_us ? $about_us->banner_image : null;
        return view('about-us', compact('about_us', 'banner_image_path'));
    }

    public function contactUs()
    {
        $contact_us = Contact::first();
        $banner_image_path = $contact_us ? $contact_us->banner_image : null;
        return view('contact-us', compact('contact_us', 'banner_image_path'));
    }

    public function services()
    {
        $services = Service::first();
        $banner_image_path = $services ? $services->banner_image : null;
        return view('services', compact('services', 'banner_image_path'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::first();
        $banner_image_path = $testimonials ? $testimonials->banner_image : null;
        return view('testimonials', compact('testimonials', 'banner_image_path'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        $banner_image_path = $galleries->isNotEmpty() ? $galleries->first()->banner_image : null;
        return view('gallery', compact('galleries', 'banner_image_path'));
    }
}
