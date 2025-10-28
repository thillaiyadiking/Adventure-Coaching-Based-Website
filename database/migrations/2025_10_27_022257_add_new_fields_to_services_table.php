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
            $table->string('section_image')->nullable();
            $table->string('section_title')->nullable();
            $table->text('section_description')->nullable();
            $table->string('section_subtitle')->nullable();
            $table->json('section_points')->nullable();
            $table->json('profile_pictures')->nullable();
            $table->string('button_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'section_image',
                'section_title',
                'section_description',
                'section_subtitle',
                'section_points',
                'profile_pictures',
                'button_text'
            ]);
        });
    }
};
