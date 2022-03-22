<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:packs.index')->only('index','indexHabilitar');
        $this->middleware('can:publico')->only('create','store');
        $this->middleware('can:packs.edit')->only('edit', 'update','habilitar');
        $this->middleware('can:packs.destroy')->only('destroy','destroy2');
    }

    public function index()
    {
        $packs=Pack::all();  
        return view('pack.index',compact('packs'));
    }
    public function indexHabilitar()
    {
        $packs=Pack::where('estado',false)->orWhere('estado',null)->get();  
        return view('pack.indexHabilitar',compact('packs'));
    }
    public function indexPost(Request $request, $idMateria){
        //$packs = Materia::find($idMateria)->packs;
        $packs = Materia::find($idMateria)->packs->where('estado',true);
        $materia=Materia::find($idMateria)->nombre;
        return view('packPost.postPack',compact('packs','materia'));
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
        $request->validate([
            'id_materia'=>'required',
            'id_docente'=>'required',
        ]);

        $pack=Pack::create([
            'id_materia'=>request('id_materia'),
            'id_docente'=>request('id_docente'),
            'link'=>request('link'),
            'descripcion'=>request('descripcion'),
            'user_id'=>auth()->user()->id,
            'estado'=>1,
        ]);
        return redirect()->route('packs.index')->with('info', 'Pack agregado correctamente');;
    }

    public function store2(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $request->validate([
            'id_materia'=>'required',
            'id_docente'=>'required',
            'link'=>'required',
        ]);

        $pack=Pack::create([
            'id_materia'=>request('id_materia'),
            'id_docente'=>request('id_docente'),
            'link'=>request('link'),
            'descripcion'=>request('descripcion'),
            'user_id'=>auth()->user()->id,
            'estado'=>false,
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
        return view('pack.show',compact ('pack'));
    }
    public function show2()
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        $user=User::find(auth()->user()->id);
        $packs=$user->packs;
        return view('pack.indexUser',compact('packs','materias','docentes'));
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
        return view('pack.edit',compact('pack','materias','docentes'));
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
        $pack->descripcion=$request->descripcion;
        $pack->save();

        return redirect()->route('packs.index');
    }
    public function habilitar(Pack $pack)
    {
        date_default_timezone_set("America/La_Paz");
        $pack->update([
            'estado'=>true,
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
    public function getPacks()
    {
        $packs = DB::table('packs')
                     ->join('docentes', 'docentes.id', '=', 'packs.id_docente')
                     ->join('materias', 'materias.id', '=', 'packs.id_materia')
                     ->select('packs.id','docentes.nombre as docente','materias.nombre as materia','packs.link','packs.descripcion','packs.user_id as usuario')
                     ->get();
        return $packs;
    }
}
