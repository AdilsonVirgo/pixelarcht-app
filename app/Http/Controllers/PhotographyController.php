<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use App\Http\Requests\StorePhotographyRequest;
use App\Http\Requests\UpdatePhotographyRequest;

class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('picview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhotographyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotographyRequest $request)
    {   
        
        if ($request->hasFile('photo')) {
            
            if ($request->file('photo')->isValid()) {                
                $imagen = $request->file('photo'); 
                $title  = $request->title;
                $filename  = $imagen->getClientOriginalName();
                $basename  = $imagen->getClientOriginalName();
                $originalName  = $imagen->getClientOriginalName();               
                $type  = $request->file('photo')->getMimeType();
                $mimeType  = $imagen->getMimeType();
                $extension  = $imagen->extension(); //getClientOriginalExtension();              
                $size  = $imagen->getSize();                
                $path  = $imagen->path();
                $pathname  = $imagen->getPathName();//^ "C:\wamp64\tmp\phpF08F.tmp"     
                $realPath  = $imagen->getRealPath();//^ "C:\wamp64\tmp\php91F3.tmp"
                $linkTarget  = $imagen->getLinkTarget();//^ "C:\wamp64\tmp\php8ADD.tmp"
                $description  = $request->title;  
                $storepath = $imagen->store('pics');                           
                return 'Done '.$storepath;
            }
        }
    }
    /* $table->increments('id');
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
            $table->text('description')->nullable();  */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function show(Photography $photography)
    {
        dd('photoID');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function edit(Photography $photography)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotographyRequest  $request
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotographyRequest $request, Photography $photography)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photography $photography)
    {
        //
    }
}
