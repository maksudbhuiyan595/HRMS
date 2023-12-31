<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            "first_name"=>fake()->name(6),
            "last_name"=>fake()->name(6),
            'email'=>fake()->email(10),
            'password'=>fake()->numberBetween(1,6),
            'empDesignation_id'=>fake()->numberBetween(1,100),
            'department_id'=>fake()->numberBetween(1,100),
            'salary'=>fake()->numberBetween(1000,100000),
            'DOB'=>fake()->date('Y_m_d'),
            'gender'=>fake()->randomElement(['male', 'female']),
            'join_date'=>fake()->date('Y_m_d'),
            'phone'=>fake()->phoneNumber(),
            'address'=>fake()->text(10),
            // 'image'=>fake()->image,
        ];
    }
}
