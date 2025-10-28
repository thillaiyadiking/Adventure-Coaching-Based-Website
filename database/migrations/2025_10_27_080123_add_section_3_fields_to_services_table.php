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
            $table->string('section_3_image')->nullable();
            $table->string('section_3_image_text')->nullable();
            $table->string('section_3_title')->nullable();
            $table->text('section_3_description')->nullable();
            $table->string('section_3_subtitle')->nullable();
            $table->json('section_3_points')->nullable();
            $table->json('section_3_profile_pictures')->nullable();
            $table->string('section_3_button_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'section_3_image',
                'section_3_image_text',
                'section_3_title',
                'section_3_description',
                'section_3_subtitle',
                'section_3_points',
                'section_3_profile_pictures',
                'section_3_button_text',
            ]);
        });
    }
};
