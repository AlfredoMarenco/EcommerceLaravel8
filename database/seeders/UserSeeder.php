<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alfredo',
            'last_name' => 'Gonzalez Marenco',
            'phone' => '9993629936',
            'email' => 'alfredomarenco@boletea.com',
            'password' => bcrypt('marencos6359:D'),

        ])->assignRole('admin');

        User::create([
            'name' => 'Alvar',
            'last_name' => 'Buenfil',
            'phone' => '9999999999',
            'email' => 'alvarbu@gmail.com',
            'password' => bcrypt('password'),

        ])->assignRole('admin');

        User::create([
            'name' => 'Editor',
            'last_name' => 'User',
            'phone' => '9999999999',
            'email' => 'editor@bajce.com',
            'password' => bcrypt('password'),

        ])->assignRole('editor');

        User::create([
            'name' => 'Tesorero',
            'last_name' => 'User',
            'phone' => '9999999999',
            'email' => 'tesorero@bajce.com',
            'password' => bcrypt('password'),

        ])->assignRole('tesorero');

        User::create([
            'name' => 'Logistica',
            'last_name' => 'User',
            'phone' => '9999999999',
            'email' => 'logistica@bajce.com',
            'password' => bcrypt('password'),

        ])->assignRole('logistica');

        User::create([
            'name' => 'Compras',
            'last_name' => 'User',
            'phone' => '9999999999',
            'email' => 'compras@bajce.com',
            'password' => bcrypt('password'),

        ])->assignRole('compras');

        User::factory(2)->create();
    }
}
