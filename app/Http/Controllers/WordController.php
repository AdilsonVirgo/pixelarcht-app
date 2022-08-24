<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Http\Requests\StoreWordRequest;
use App\Http\Requests\UpdateWordRequest;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Word::all();
        return view('wordview.index',['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wordview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWordRequest $request)
    {
        try {
            $cleanX = $this->clean($request->name);
            $arrayWords = explode("-",$cleanX);
            foreach($arrayWords as $ind => $val) {
                echo "$ind = $val<br>";
                $user = Word::firstOrNew(['name' =>  $val]);            
                $user->name = strtolower($val);
                $nlettersX = strlen($val);  
                if($nlettersX>0){
                    $user->nletters = $nlettersX;          
                    $user->save();                    
                }                 
              }             
              return redirect('/words');
          }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();           
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWordRequest  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWordRequest $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        //
    }

    public function clean($string) {
    /*  $string = str_replace('á', 'a', $string); // Replaces all spaces with hyphens.   
        $string = str_replace('é', 'e', $string); // Replaces all spaces with hyphens.   
        $string = str_replace('í', 'i', $string); // Replaces all spaces with hyphens.   
        $string = str_replace('ó', 'o', $string); // Replaces all spaces with hyphens.   */ 
        $string = str_replace('ü', 'u', $string); // Replaces all ü with u.   
        $string = str_replace('ç', 'c', $string); // Replaces all ç with c. //Better tahn this is identified the language
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-zñÑáéíóúÁÉÍÓÚÝ\-]/', '', $string); // Removes special chars.     
        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
     }


}
