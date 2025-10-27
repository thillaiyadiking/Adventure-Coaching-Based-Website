<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'banner_image',
        'title',
        'subtitle',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
