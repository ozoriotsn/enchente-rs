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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('type');
            $table->string('color');
            $table->string('city');
            $table->string('shelter');
            $table->boolean('recued')->nullable()->default(true);
            $table->boolean('active')->nullable()->default(false);
            $table->boolean('donation')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
