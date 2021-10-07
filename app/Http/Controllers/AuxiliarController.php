<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuxiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auxiliares = Auxiliar::all();
        return view('auxiliar.index', compact('auxiliares'));
    }

    public function indexPost(){
        
        return view('auxiliar.postAuxiliar');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = DB::table('materias')->get();
        return view('auxiliar.create',compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $Aux=Auxiliar::create([
            'id_materia'=>request('id_materia'),
            'nombre'=>request('nombre'),
            'tipo'=>request('tipo'),
            'telefono'=>request('telefono'),
            'descripcion'=>request('descripcion'),
            'imagen'=>request('imagen'),
        ]);
        return redirect()->route('auxiliar.index');
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
        $materias = DB::table('materias')->get();
        return view('auxiliar.edit',compact('auxiliar','materias'));
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
        date_default_timezone_set("America/La_Paz");
        $auxiliar->id_materia=$request->id_materia;
        $auxiliar->nombre=$request->nombre;
        $auxiliar->tipo=$request->tipo;
        $auxiliar->telefono=$request->telefono;
        $auxiliar->descripcion=$request->descripcion;
        $auxiliar->imagen=$request->imagen;
        $auxiliar->save();

        return redirect()->route('auxiliar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auxiliar $auxiliar)
    {
        $auxiliar->delete();
        return redirect()->route('auxiliar.index');
    }
}
