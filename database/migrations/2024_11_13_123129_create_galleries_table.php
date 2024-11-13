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
        Schema::create('galleries', function (Blueprint $table) {
            $table->string('gallery_id', 30)->primary();
            $table->string('gallery_image')->nullable();
            $table->text('gallery_caption')->nullable();
            $table->text('gallery_alt')->nullable();
            $table->integer('gallery_caption')->nullable();
            $table->string('id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
