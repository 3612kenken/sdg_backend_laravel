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
        Schema::create('mechanisms', function (Blueprint $table) {
            $table->id('mechanism_id');
            $table->text('planning')->nullable();
            $table->text('design')->nullable();
            $table->text('installation')->nullable();
            $table->text('testing')->nullable();
            $table->text('monitoring')->nullable();
            $table->integer('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanisms');
    }
};
