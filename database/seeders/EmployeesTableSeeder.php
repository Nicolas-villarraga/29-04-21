<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();
        for($i=0;$i<=20;$i++){
           Employee::create([
            'name'=>$faker->name,
            'lastname'=>$faker->lastname,
            'email'=>$faker->email,
            'document'=>$faker->isbn10,
            'gender'=>$faker->creditCardNumber
            ]);
        }
    }
}   