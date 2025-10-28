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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('header_text')->nullable(); // Single header text
            $table->json('header_notes')->nullable(); // Multiple notes
            $table->json('brand_logos')->nullable(); // Multiple brand logos
            $table->json('banner_images')->nullable(); // Home background banner images
            $table->json('summary_of_places')->nullable(); // Dynamic: title_head, multiple images, days, place
            $table->json('summary_of_services')->nullable(); // Dynamic: icon, title, description, button or link name
            $table->json('summary_of_overview')->nullable(); // Dynamic: title, description, list (icon, title)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
