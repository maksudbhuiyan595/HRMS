<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            
             "name"=> "Admin",
                "email"=> "admin@gmail.com",
                "password"=> bcrypt("123456"),
                "role"=> "admin",
                'role_id'=>1,  
            
            
           
              /*   'name'=> 'Manager',
                'email'=> 'manager@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=> 'manager',
                'role_id'=>2, 
              */
        ]);
    }
}
