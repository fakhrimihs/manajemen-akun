<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'name'=>'Fakhri Dev',
                'email'=>'fakhrimihsdev@gmail.com',
                'role'=>'developer',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Ihsan Member',
                'email'=>'mihsmem@gmail.com',
                'role'=>'member',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Admin Roger',
                'email'=>'rogeradm@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345')
            ],
        ];

        foreach($userData as $key =>  $val){
            User::create($val);
        }
    }
}
