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
        $client->name = 'test';
    $client->email = 'test@gmail.com';
    $client->password = bcrypt('mohamed123');
    $client->save();
        $client = new User();
        $client->name = 'test1';
        $client->email = 'test1@gmail.com';
        $client->password = bcrypt('mohamed123');
        $client->save();
    $client->roles()->attach($role_client);
    $admin = new User();
    $admin->name = 'mohamed barbouche';
    $admin->email = 'barbouchemed@gmail.com';
    $admin->password = bcrypt('mohamed123');
    $admin->save();
    $admin->roles()->attach($role_admin);
    }
}
