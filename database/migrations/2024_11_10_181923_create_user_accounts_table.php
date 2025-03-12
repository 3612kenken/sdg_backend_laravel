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
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('mi')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('designation')->nullable();
            $table->string('user_level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_accounts');
    }
};
