<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.create')->only('create', 'store');
        $this->middleware('can:users.edit')->only('edit', 'update');
        $this->middleware('can:users.destroy')->only('destroy');
    }
    public function index()
    {
        // $users = DB::table('users')->get();
        $users = DB::table('users')
                     ->join('model_has_roles', 'model_id', '=', 'users.id')
                     ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                     ->select('users.*', 'roles.name as roles_name')
                     ->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = DB::table('roles')->get();
        return view('user.create', compact('roles'));
    }


    public function store(Request $request)
    {
       // date_default_timezone_set("America/La_Paz");
       //return $request;
        $users=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            //'password' =>$request['password'], no oculta contraseña
        ]);
        
        //se agrega un rol al usuario
        if($request->roles > 0){
            $users->roles()->sync($request->roles);
            $users->idRol  = $request->roles;
            $users->save();
        }

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit',compact('user', 'roles') );
 
    }

    public function update(Request $request, User $user)
    {
        //actualiza nombre
        if($user->name <> $request->name){
            $user->name = $request->name;
        }
        //actualiza contraseña
        if($request->password <> ''){
            $user->password = bcrypt($request->password);
        }

        if($user->email <> $request->email)
            $user->email = $request->email;
        //actualiza los roles
        if($request->roles > 0 && $user->idRol <> $request->roles ){
            $user->idRol  = $request->roles;
            $user->roles()->sync($request->roles);
        }           
        $user->save(); //guardar cambios de usuario 
        return redirect()->route('users.edit', $user)->with('info', 'se actualizo el usuario correctamente');;
    }

    public function destroy(User $user)
    {
        $nombreRol = DB::table('roles')->where('id', '=', $user->idRol)->value('name');
        $user->removeRole($nombreRol);
        $user->delete();

        return redirect()->route('users.index');
    }
}
