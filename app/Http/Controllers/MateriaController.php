<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MateriaController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:materias.index')->only('index');
        $this->middleware('can:materias.create')->only('create', 'store');
        $this->middleware('can:materias.edit')->only('edit', 'update');
        $this->middleware('can:materias.destroy')->only('destroy');
    }
    
    public function index()
    {
        $materias=Materia::all();
        return view('materia.index',compact('materias'));
    }
    public function indexPost(Request $request,Semestre $semestres){
        dd($semestres()->where('id_semestre',2)->value('id'));
        $materias = DB::table('materias')->where('id_semestre', $semestres->id)->get();
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
        $semestres = DB::table('semestres')->get();
        return view('materia.create',compact('semestres'));
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
        $semestres=DB::table('semestres')->get();
        return view('materia.edit',compact('materia','semestres'));
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
