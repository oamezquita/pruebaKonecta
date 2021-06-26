<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Seeder;

use App\Models\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

  

class CreateSalesUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

            'name' => 'Pedro perez', 

            'email' => 'pedro.perez@gmail.com',

            'password' => bcrypt('123456')

        ]);

    

        $role = Role::create(['name' => 'Vendedor']);

     

        $permissions = ['client-list',  'client-create', 'client-edit', 'client-delete'];

   

        $role->syncPermissions($permissions);

     

        $user->assignRole([$role->id]);

    }

}