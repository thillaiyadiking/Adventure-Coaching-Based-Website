<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'phone_numbers',
        'email_addresses',
        'physical_addresses',
        'websites',
        'banner_image',
    ];

    protected $casts = [
        'phone_numbers' => 'array',
        'email_addresses' => 'array',
        'physical_addresses' => 'array',
        'websites' => 'array',
    ];
}
