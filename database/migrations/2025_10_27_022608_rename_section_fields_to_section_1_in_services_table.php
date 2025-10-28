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
            $table->renameColumn('section_image', 'section_1_image');
            $table->renameColumn('section_title', 'section_1_title');
            $table->renameColumn('section_description', 'section_1_description');
            $table->renameColumn('section_subtitle', 'section_1_subtitle');
            $table->renameColumn('section_points', 'section_1_points');
            $table->renameColumn('profile_pictures', 'section_1_profile_pictures');
            $table->renameColumn('button_text', 'section_1_button_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->renameColumn('section_1_image', 'section_image');
            $table->renameColumn('section_1_title', 'section_title');
            $table->renameColumn('section_1_description', 'section_description');
            $table->renameColumn('section_1_subtitle', 'section_subtitle');
            $table->renameColumn('section_1_points', 'section_1_points');
            $table->renameColumn('section_1_profile_pictures', 'profile_pictures');
            $table->renameColumn('section_1_button_text', 'button_text');
        });
    }
};
