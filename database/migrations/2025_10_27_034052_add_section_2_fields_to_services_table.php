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
        Schema::table('services', function (Blueprint $table) {
            $table->string('section_2_image')->nullable();
            $table->string('section_2_image_text')->nullable();
            $table->string('section_2_title')->nullable();
            $table->text('section_2_description')->nullable();
            $table->string('section_2_subtitle')->nullable();
            $table->json('section_2_points')->nullable();
            $table->json('section_2_profile_pictures')->nullable();
            $table->string('section_2_button_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'section_2_image',
                'section_2_image_text',
                'section_2_title',
                'section_2_description',
                'section_2_subtitle',
                'section_2_points',
                'section_2_profile_pictures',
                'section_2_button_text',
            ]);
        });
    }
};
