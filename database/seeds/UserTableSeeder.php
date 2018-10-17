<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_client = Role::where('nom', 'client')->first();
    $role_admin  = Role::where('nom', 'admin')->first();
    $client = new User();
    $client->nom = 'test';
    $client->email = 'test@gmail.com';
    $client->password = bcrypt('mohamed123');
    $client->prenom='iyadh';
    $client->telephone='124563';
    $client->adresse='lac';
    $client->code_postal="1053";
    $client->save();
    $client->roles()->attach($role_client);
    $admin = new User();
    $admin->nom = 'mohamed barbouche';
    $admin->email = 'barbouchemed@gmail.com';
    $admin->password = bcrypt('mohamed123');
    $admin->prenom='iyadh';
    $admin->telephone='124563';
    $admin->adresse='lac';
    $admin->code_postal="1053";
    $admin->save();
    $admin->roles()->attach($role_admin);
    }
}
