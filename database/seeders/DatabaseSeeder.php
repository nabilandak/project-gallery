<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $data = [
            'name'=>"admin",
            'username'=>"admin",
            'address'=>"jakarta",
            'jenis_kelamin'=>'Laki-laki',
            'bio'=>'nothing last forever',
            'no_telepon'=>'0881223231',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123'),
        ];
        User::create($data);
    }
}
