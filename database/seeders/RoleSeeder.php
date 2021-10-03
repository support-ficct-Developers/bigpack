<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$role1]);
        Permission::create(['name'=>'login'])->syncRoles([$role1]);
        
        Permission::create(['name'=>'admin.docentes.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.docentes.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.docentes.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.docentes.destroy'])->syncRoles([$role1]);

        Permission::create(['name'=>'materias.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'materias.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'materias.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'materias.destroy'])->syncRoles([$role1]);

        Permission::create(['name'=>'docentes.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'docentes.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'docentes.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'docentes.destroy'])->syncRoles([$role1]);
        
        Permission::create(['name'=>'semestres.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'semestres.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'semestres.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'semestres.destroy'])->syncRoles([$role1]);
        
    }
}
