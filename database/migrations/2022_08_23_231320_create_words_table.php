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
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('name');//amor
            $table->integer('nletters');//4
            $table->integer('accentuation_id')->default(1)->nullable();//1
            $table->string('lang')->default('es')->nullable();//es
            $table->string('description')->nullable();//sentimiento,sustantivo
            $table->string('variants')->nullable();//amol
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
        Schema::dropIfExists('words');
    }
};
