<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'banner_image',
        'title',
        'description',
        'detailed_testimonials',
    ];

    protected $casts = [
        'detailed_testimonials' => 'array',
    ];
}
