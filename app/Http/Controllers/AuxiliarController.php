<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuxiliarController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:auxiliares.index')->only('index');
        $this->middleware('can:auxiliares.create')->only('create', 'store');
        $this->middleware('can:auxiliares.edit')->only('edit', 'update');
        $this->middleware('can:auxiliares.destroy')->only('destroy');
    }
    public function index()
    {
        $auxiliars = Auxiliar::all();
        return view('auxiliar.index', compact('auxiliars'));
    }

    public function indexPost(){
        $auxiliars = Auxiliar::all();
        return view('auxiliar.postAuxiliar', compact('auxiliars'));
  
    }
    
    public function create()
    {
        $materias = DB::table('materias')->get();
        $tipos = ['oficial', 'voluntario'];
        return view('auxiliar.create',compact('materias', 'tipos'));
    }

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
        return redirect()->route('auxiliares.index');
    }

    
    public function show(Auxiliar $auxiliar)
    {
        //
    }

   
    public function edit(Auxiliar $auxiliar)
    {
        $materias = DB::table('materias')->get();
        return view('auxiliar.edit',compact('auxiliar','materias'));
    }

    
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

        return redirect()->route('auxiliares.index');
    }

    
    public function destroy(Auxiliar $auxiliar)
    {
        $auxiliar->delete();
        return redirect()->route('auxiliares.index');
    }
}
