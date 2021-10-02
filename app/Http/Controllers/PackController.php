<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Materia;
use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs=Pack::all();
        return view('pack.index',compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        return view('pack.create',['materias'=>$materias],['docentes'=>$docentes]);
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
        $pack=Pack::create([
            'id_materia'=>request('id_materia'),
            'id_docente'=>request('id_docente'),
            'link'=>request('link'),
        ]);
        return redirect()->route('packs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        return view('pack.show',compact ('pack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        $materia = DB::table('materias')->get();
        $docente = DB::table('docentes')->get();
        return view('pack.edit',compact('pack'),['materias'=>$materias],['docentes'=>$docentes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pack $pack)
    {
        date_default_timezone_set("America/La_Paz");
        $pack->id_materia=$request->id_materia;
        $pack->id_docente=$request->id_docente;
        $pack->link=$request->link;
        $pack->save();

        return redirect()->route('packs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();
        return redirect()->route('packs.index');
    }
}
