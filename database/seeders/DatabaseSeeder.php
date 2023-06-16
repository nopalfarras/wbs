<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Admin',
            'email'=>'admin@plnt.com',
            'password'=>bcrypt('1234567890'),
            'jabatan'=>'Admin',
            'status'=>'1',
        ]);
        
    }
}
