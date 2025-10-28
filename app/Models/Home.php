<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'header_text',
        'header_notes',
        'brand_logos',
        'banner_images',
        'summary_of_places',
        'summary_of_services',
        'summary_of_overview',
    ];

    protected $casts = [
        'header_notes' => 'array',
        'brand_logos' => 'array',
        'banner_images' => 'array',
        'summary_of_places' => 'array',
        'summary_of_services' => 'array',
        'summary_of_overview' => 'array',
    ];
}
