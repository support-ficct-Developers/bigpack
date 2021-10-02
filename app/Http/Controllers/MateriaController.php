<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias=Materia::all();
        return view('materia.index',compact('materias'));
    }
    public function indexPost(Request $request){
        $materias = DB::table('materias')->where('id_semestre', $request->idSemestre)->get();
        // $materias = Materia::paginate(5);
        if ($request->ajax()){
            $view =view('materiaPost.dataMateria',compact('materias'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('materiaPost.postMateria',compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materia.create');
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
        $materias=Materia::create([
            'id_semestre'=>request('id_semestre'),
            'nombre'=>request('nombre'),
            'sigla'=>request('sigla'),
        ]);
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        
        return view('materia.show',compact ('materia'));
    }

    public function show2(Request $request)
    {
        $materias = DB::table('materias')->where('id_semestre',$request)->get();
        return view('materia.index',compact('materias'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materia.edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        date_default_timezone_set("America/La_Paz");
        $materia->id_semestre=$request->id_semestre;
        $materia->nombre=$request->nombre;
        $materia->sigla=$request->sigla;
        $materia->save();

        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
