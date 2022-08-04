<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentes', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('recette_id')->constrained('recettes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentes');
    }
};
