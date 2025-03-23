<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear un usuario seed
        $user = new User();
        $user->name = 'Pedro Luis';
        $user->email = 'plcgcpm2@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        User::factory(10)->create(); //utilizar los factory
    }
}
