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
        dd($request->file());
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
