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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('author')->nullable();
            $table->date('proj_date')->nullable();
            $table->string('link')->nullable();
            $table->string('logo')->nullable();
            $table->text('background')->nullable();
            $table->text('conclusion')->nullable();
            $table->text('cta')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
