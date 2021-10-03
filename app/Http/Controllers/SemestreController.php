<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemestreController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:semestres.index')->only('index');
        $this->middleware('can:semestres.create')->only('create', 'store');
        $this->middleware('can:semestres.edit')->only('edit', 'update');
        $this->middleware('can:semestres.destroy')->only('destroy');
    }

    public function index()
    {
        $semestres = Semestre::all();
        return view('semestre.index',compact('semestres'));
    }
    public function indexPost()
    {
        return view('home');
    }

    // public function index1(Request $request)
    // {
    //     $materias = DB::table('materias')->where(id_semestre,$request)->get();
    //     return view('materia.index',compact('materias'));
    // }

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
     * @param  \App\Models\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$materias = DB::table('materias')->where(id_semestre,1)->get();
        return view('materia.show2',compact('materias'));
    }
    public function show2(Request $request)
    {
        $materias = DB::table('materias')->where('id_semestre',$request)->get();
        return view('materia.index',compact('materias'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Semestre $semestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestre $semestre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semestre $semestre)
    {
        //
    }
}
