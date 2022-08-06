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
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->unique();
            $table->string('ingredients');
            $table->string('preparation');
            $table->time('duree')->default(0);
            $table->string('other_categorie')->nullable();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade');
            $table->foreignId('categorie_id')
                ->constrained('categories')
                ->onUpdate('cascade');
            $table->boolean('validation')->default(0);
            $table->unsignedBigInteger('vue')->default(0);
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
        Schema::dropIfExists('recettes');
    }
};
