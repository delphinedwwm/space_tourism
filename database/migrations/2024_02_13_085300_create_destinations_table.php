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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('img'); 
            $table->string('titre_fr'); 
            $table->string('voyage_fr'); 
            $table->integer('distance_fr'); 
            $table->string('duree_fr'); 
            $table->string('titre_en'); 
            $table->string('voyage_en'); 
            $table->integer('distance_en'); 
            $table->string('duree_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
