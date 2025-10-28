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
            $table->dropColumn('section_1_subtitle');
            $table->dropColumn('section_1_points');
            $table->dropColumn('section_2_subtitle');
            $table->dropColumn('section_2_points');
            $table->dropColumn('section_3_subtitle');
            $table->dropColumn('section_3_points');

            $table->json('section_1_subtitles_points')->nullable();
            $table->json('section_2_subtitles_points')->nullable();
            $table->json('section_3_subtitles_points')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('section_1_subtitles_points');
            $table->dropColumn('section_2_subtitles_points');
            $table->dropColumn('section_3_subtitles_points');

            $table->json('section_1_subtitle')->nullable();
            $table->json('section_1_points')->nullable();
            $table->json('section_2_subtitle')->nullable();
            $table->json('section_2_points')->nullable();
            $table->json('section_3_subtitle')->nullable();
            $table->json('section_3_points')->nullable();
        });
    }
};
