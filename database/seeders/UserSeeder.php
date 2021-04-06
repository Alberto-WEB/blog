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
            
            'name' => 'Carlos Guzman',
            'email' => 'carlos@siur.mx',
            'password' => bcrypt('12345678'),

        ])->assignRole('Admin');

        User::create([

            'name' => 'Luis Adrian',
            'email' => 'luis@siur.mx',
            'password' => bcrypt('12345678'),

        ])->assignRole('Blogger');

        User::create([
            
            'name' => 'Contador isaias',
            'email' => 'isaias@siur.mx',
            'password' => bcrypt('12345678')

        ])->assignRole('Blogger');
        
        //User::factory(99)->create();
    }
}
