<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Semestre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:packs.index')->only('index', 'indexHabilitar');
        $this->middleware('can:publico')->only('create', 'store');
        $this->middleware('can:packs.edit')->only('edit', 'update', 'habilitar');
        $this->middleware('can:packs.destroy')->only('destroy', 'destroy2');
    }

    public function index()
    {
        $packs = Pack::all();
        return view('pack.index', compact('packs'));
    }
    public function indexHabilitar()
    {
        $packs = Pack::where('estado', false)->orWhere('estado', null)->get();
        return view('pack.indexHabilitar', compact('packs'));
    }
    public function indexPost(Request $request, $idMateria)
    {
        //$packs = Materia::find($idMateria)->packs;
        $packs = Materia::find($idMateria)->packs->where('estado', true);
        $materia = Materia::find($idMateria)->nombre;
        return view('packPost.postPack', compact('packs', 'materia'));
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
        return view('pack.create', ['materias' => $materias], ['docentes' => $docentes]);
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
        $request->validate([
            'id_materia' => 'required',
            'id_docente' => 'required',
        ]);

        $pack = Pack::create([
            'id_materia' => request('id_materia'),
            'id_docente' => request('id_docente'),
            'link' => request('link'),
            'descripcion' => request('descripcion'),
            'user_id' => auth()->user()->id,
            'estado' => 1,
        ]);
        return redirect()->route('packs.index')->with('info', 'Pack agregado correctamente');;
    }

    public function store2(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $request->validate([
            'id_materia' => 'required',
            'id_docente' => 'required',
            'link' => 'required',
        ]);

        $pack = Pack::create([
            'id_materia' => request('id_materia'),
            'id_docente' => request('id_docente'),
            'link' => request('link'),
            'descripcion' => request('descripcion'),
            'user_id' => auth()->user()->id,
            'estado' => false,
        ]);
        return redirect()->route('packs.show2')->with('info', 'Pack agregado correctamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        return view('pack.show', compact('pack'));
    }
    public function show2()
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        $user = User::find(auth()->user()->id);
        $packs = $user->packs;
        return view('pack.indexUser', compact('packs', 'materias', 'docentes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        return view('pack.edit', compact('pack', 'materias', 'docentes'));
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
        $pack->id_materia = $request->id_materia;
        $pack->id_docente = $request->id_docente;
        $pack->link = $request->link;
        $pack->descripcion = $request->descripcion;
        $pack->save();

        return redirect()->route('packs.index');
    }
    public function habilitar(Pack $pack)
    {
        date_default_timezone_set("America/La_Paz");
        $pack->update([
            'estado' => true,
        ]);
        return redirect()->route('packs.habilitar');
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

    public function destroy2(Pack $pack)
    {
        $pack->delete();
        return redirect()->route('packs.habilitar');
    }
    /* FUNCIONES PARA LA API */
    public function getPacks(Request $request)
    {
        $packs = DB::table('packs')
            ->select('packs.id', 'materias.id as id_materia', 'materias.nombre as materia',  'materias.sigla', 'packs.link', 'packs.descripcion', 'semestres.nombre as semestre', 'docentes.id as id_docente', 'docentes.nombre as docente', 'users.name as usuario', 'packs.created_at')
            ->join('materias', 'materias.id', '=', 'packs.id_materia')
            ->leftjoin('docentes', 'docentes.id', '=', 'packs.id_docente')
            ->leftJoin('users', 'users.id', 'packs.user_id')
            ->leftJoin('semestres', 'semestres.id', 'materias.id_semestre')
            ->orderby('materias.id_semestre', 'asc')
            ->orderby('materias.nombre', 'asc');

        if ($request->id_materia) {
            $packs = $packs->where('packs.id_materia', $request->id_materia);
        }

        if ($request->id_docente && $request->id_docente != '-1') {
            $packs = $packs->where('packs.id_docente', $request->id_docente);
        }

        $packs = $packs->get();

        return $packs;
    }

    public function getPacksSemestres()
    {
        return Semestre::select('semestres.id', 'semestres.nombre')
            ->with('materias', function ($query) {
                $query->select('materias.id_semestre', 'materias.id', 'materias.nombre', 'materias.sigla')
                    ->with('packs', function ($query) {
                        $query->select('packs.id_materia', 'packs.link', 'packs.descripcion', 'packs.created_at', 'docentes.nombre as docente', 'users.name as usuario')
                            ->leftjoin('users', 'users.id', 'packs.user_id')
                            ->leftjoin('docentes', 'docentes.id', 'packs.id_docente')
                            ->orderby('packs.created_at', 'desc');
                    });
            })->get();
    }

    public function getSemestresMaterias()
    {
        return Semestre::select('semestres.id', 'semestres.nombre')
            ->with('materias', function ($query) {
                $query->select('materias.id_semestre', 'materias.id', 'materias.nombre', 'materias.sigla')
                    ->with('packs', function ($query) {
                        $query->select('packs.id_materia', 'docentes.nombre as docente', 'docentes.id as id_docente')
                            ->leftjoin('docentes', 'docentes.id', 'packs.id_docente')
                            ->orderby('docentes.nombre', 'asc')
                            ->groupby('packs.id_materia', 'docentes.nombre', 'docentes.id');
                    });
            })->get();
    }
}
