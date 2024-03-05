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
        Schema::create('crews', function (Blueprint $table) {
            $table->id();
            $table->string('image');

            $table->timestamps();
            
            $table->string('fonction_fr');
            $table->string('nom_fr');
            $table->text('description_fr');
            
            $table->string('fonction_en');
            $table->string('nom_en');
            $table->text('description_en');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crews');
    }
};
