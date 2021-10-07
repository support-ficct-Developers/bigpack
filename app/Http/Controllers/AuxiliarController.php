<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auxiliar.postAuxiliar');
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
     * @param  \App\Models\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function show(Auxiliar $auxiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(Auxiliar $auxiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auxiliar $auxiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auxiliar $auxiliar)
    {
        //
    }
}
