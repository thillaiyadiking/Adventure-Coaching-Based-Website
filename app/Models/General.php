<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'social_media_links',
        'icon',
    ];

    protected $casts = [
        'social_media_links' => 'array',
    ];
}
