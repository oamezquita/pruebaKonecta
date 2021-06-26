<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Seeder;

use App\Models\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

  

class CreateAdminUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

            'name' => 'Oscar Amezquita', 

            'email' => 'admin@gmail.com',

            'password' => bcrypt('123456')

        ]);

    

        $role = Role::create(['name' => 'Administrador']);

     

        $permissions = Permission::pluck('id','id')->all();

   

        $role->syncPermissions($permissions);

     

        $user->assignRole([$role->id]);

    }

}