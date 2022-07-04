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
            $table->string('basename');
            $table->string('originalName');            
            $table->string('type');
            $table->string('mimeType');
            $table->string('extension');
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();                     
            $table->integer('size')->nullable();
            $table->text('path')->nullable(); 
            $table->text('pathname')->nullable(); 
            $table->text('realPath')->nullable();    
            $table->text('linkTarget')->nullable();           
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
/*  "photo" => Illuminate\Http\UploadedFile {#328 ▼
    -test: false
    -originalName: "01.jpg"
    -mimeType: "image/jpeg"
    -error: 0
    #hashName: null
    path: "C:\wamp64\tmp"
    filename: "phpD184.tmp"
    basename: "phpD184.tmp"
    pathname: "C:\wamp64\tmp\phpD184.tmp"
    extension: "tmp"
    realPath: "C:\wamp64\tmp\phpD184.tmp"
    aTime: 2022-07-04 09:31:57
    mTime: 2022-07-04 09:31:57
    cTime: 2022-07-04 09:31:57
    inode: 1970324837975050
    size: 146481
    perms: 0100666
    owner: 0
    group: 0
    type: "file"
    writable: true
    readable: true
    executable: false
    file: true
    dir: false
    link: false
    linkTarget: "C:\wamp64\tmp\phpD184.tmp"
  } */
