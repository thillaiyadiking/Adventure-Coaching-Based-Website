<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = [
        'banner_image',
        'title',
        'description',
        'years_of_experience',
        'years_of_experience_text',
        'text_in_image_tag',
        'more_about_button_text',
        'name_of_founder',
        'role',
        'profile_image',
        'front_image',
        'back_image',
    ];
}
