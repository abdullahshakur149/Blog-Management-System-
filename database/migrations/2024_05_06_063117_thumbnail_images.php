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
        Schema::create('thumbnail_images', function (Blueprint $table) {
            $table->id('thumbnail_image_id')->primary();
            $table->foreignId('thumbnail_id')->constrained('thumbnails', 'thumbnail_id');
            $table->string('thumbnail_image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thumbnail_images');
    }
};
