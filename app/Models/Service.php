<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected $fillable = [
       'banner_image',
       'title',
       'description',
       'service_attachment',
       'offers',
       'section_1_image',
       'section_1_title',
       'section_1_description',
       'section_1_subtitles_points',
       'section_1_profile_pictures',
       'section_1_button_text',
       'section_1_image_text',
       'section_2_image',
       'section_2_title',
       'section_2_description',
       'section_2_subtitles_points',
       'section_2_profile_pictures',
       'section_2_button_text',
       'section_2_image_text',
       'section_3_image',
       'section_3_title',
       'section_3_description',
       'section_3_subtitles_points',
       'section_3_profile_pictures',
       'section_3_button_text',
       'section_3_image_text',
   ];

   protected $casts = [
       'offers' => 'array',
       'section_1_profile_pictures' => 'array',
       'section_1_subtitles_points' => 'array',
       'section_2_profile_pictures' => 'array',
       'section_2_subtitles_points' => 'array',
       'section_3_profile_pictures' => 'array',
       'section_3_subtitles_points' => 'array',
   ];
}
