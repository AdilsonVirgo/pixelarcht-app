<?php

namespace App\Http\Controllers;

use App\Models\accentuation;
use App\Http\Requests\StoreaccentuationRequest;
use App\Http\Requests\UpdateaccentuationRequest;

class AccentuationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = accentuation::all();
        return view('accview.index',['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaccentuationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccentuationRequest $request)
    {
        $nameX = $request->name; 
        $acc = new accentuation();
        $acc->name = $nameX;
        $acc->save();
        return redirect('/accentuations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accentuation  $accentuation
     * @return \Illuminate\Http\Response
     */
    public function show(accentuation $accentuation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accentuation  $accentuation
     * @return \Illuminate\Http\Response
     */
    public function edit(accentuation $accentuation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccentuationRequest  $request
     * @param  \App\Models\accentuation  $accentuation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccentuationRequest $request, accentuation $accentuation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accentuation  $accentuation
     * @return \Illuminate\Http\Response
     */
    public function destroy(accentuation $accentuation)
    {
        //
    }
}
