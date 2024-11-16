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
        Schema::create('articles', function (Blueprint $table) {
            $table->string('article_id', 30)->primary();
            $table->text('headline')->nullable();
            $table->text('sub_headline')->nullable();
            $table->text('lead_paragraph')->nullable();
            $table->text('background_information')->nullable();
            $table->text('highlights')->nullable();
            $table->text('impact')->nullable();
            $table->text('future_plans')->nullable();
            $table->text('conclusion')->nullable();
            $table->text('call_to_action')->nullable();
            $table->text('reminder')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
