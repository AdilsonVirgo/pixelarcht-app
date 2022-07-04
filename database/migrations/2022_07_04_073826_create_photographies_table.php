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
        Schema::create('photographies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->default(0);
            $table->string('title');
            $table->string('filename');
            $table->string('originalName');    
            $table->string('mimeType');
            $table->string('extension');
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();                     
            $table->integer('size')->nullable();
            $table->text('storePath')->nullable(); 
            $table->text('fullPath')->nullable();        
            $table->text('description')->nullable();            
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
        Schema::dropIfExists('photographies');
    }
};
