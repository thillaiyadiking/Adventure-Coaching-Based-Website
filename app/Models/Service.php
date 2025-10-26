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
   ];

   protected $casts = [
       'offers' => 'array',
   ];
}
