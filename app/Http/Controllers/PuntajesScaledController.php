<?php

namespace App\Http\Controllers;

use App\Wod1scaled;
use App\Wod2scaled;
use Illuminate\Http\Request;

class PuntajesScaledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wod1 = Wod1scaled::all();
        $wod2 = Wod2scaled::all ();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wod1scaled  $puntajesScaled
     * @return \Illuminate\Http\Response
     */
    public function show(Wod1scaled $puntajesScaled)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wod1scaled  $puntajesScaled
     * @return \Illuminate\Http\Response
     */
    public function edit(Wod1scaled $puntajesScaled)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wod1scaled  $puntajesScaled
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wod1scaled $puntajesScaled)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wod1scaled  $puntajesScaled
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wod1scaled $puntajesScaled)
    {
        //
    }
}
