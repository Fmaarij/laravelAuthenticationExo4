<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'kev',
            'first_name' => 'Assiabo',
            'age' => 36,
            'adresse' => 'Rue de la trône 28, Bruxelles',
            'email' =>'test@example.com',
            'password'=>bcrypt('12345678'),
            'role_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'Kadri',
            'first_name' => 'Kadri',
            'age' => 36,
            'adresse' => 'Rue de course 8, Bruxelles',
            'email' =>'test1@example.com',
            'password'=>bcrypt('12345678'),
            'role_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],

        [
            'name' => 'Liri',
            'first_name' => 'Don',
            'age' => 36,
            'adresse' => 'Rue assassin  98, Bruxelles',
            'email' =>'test3@example.com',
            'password'=>bcrypt('12345678'),
            'role_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'Yves',
            'first_name' => 'Yves',
            'age' => 36,
            'adresse' => 'Rue de pouvoir 100, Bruxelles',
            'email' =>'test4@example.com',
            'password'=>bcrypt('12345678'),
            'role_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]

        ]);}
    }
