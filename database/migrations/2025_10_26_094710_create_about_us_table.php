<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->string('years_of_experience_text')->nullable();
            $table->string('text_in_image_tag')->nullable();
            $table->string('more_about_button_text')->nullable();
            $table->string('name_of_founder')->nullable();
            $table->string('role')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('front_image')->nullable();
            $table->string('back_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
