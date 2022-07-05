<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use App\Http\Requests\StorePhotographyRequest;
use App\Http\Requests\UpdatePhotographyRequest;
use App\ImageModel;
use Image;

class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $all = Photography::all();       
        $countImages = $all->count();
        if($countImages>0){
        return view('picview.index',['all' => $all]);
        }else{
            //return redirect('/upload');
        }

        
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
                $category_id  = $request->category_id;
                $filename  = $imagen->getClientOriginalName();
                $originalName  = $imagen->getClientOriginalName();  
                $mimeType  = $imagen->getMimeType();
                $extension  = $imagen->extension(); //getClientOriginalExtension();              
                $size  = $imagen->getSize();                    
                $description  = $request->description;  
                $storepath = $imagen->store('pics');       
                $url = asset('storage/'.$storepath);               
                $fullPath  = $url;                                
                
                //
                $photoX = new Photography();
                $photoX->title = $title;
                $photoX->category_id = $category_id;
                $photoX->filename = $storepath;//remover la extension y la carpeta//pics/JlAwZK3NuIMpxJWRPhLApZKxP0UN4aeVDAvpTMA3.jpg    
                $photoX->originalName = $originalName;
                $photoX->mimeType = $mimeType;
                $photoX->extension = $extension;
                $photoX->size = $size;
                $photoX->storepath = $storepath;
                $photoX->fullpath = $fullPath;
                $photoX->description = $description;
                $photoX->save();

                return redirect('/photos');

            }
        }

    }

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
