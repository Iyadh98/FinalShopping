<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_client = new Role();
    $role_client->nom = 'client';
    $role_client->save();
    $role_admin = new Role();
    $role_admin->nom = 'admin';
    $role_admin->save();
    }
}
