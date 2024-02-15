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
            $table->string('image');

            $table->timestamps();

            $table->string('titre_fr');
            $table->text('destination_fr');
            $table->string('distance_fr');
            $table->string('duree_fr');

            $table->string('titre_en');
            $table->text('destination_en');
            $table->string('distance_en');
            $table->string('duree_en');
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
