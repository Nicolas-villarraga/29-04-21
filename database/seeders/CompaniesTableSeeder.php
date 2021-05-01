<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Company;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Faker = Faker::create();
        for($i=0;$i<=3;$i++) {
            Company::create([
                'name'=>$Faker->company,
                'description'=>$Faker->catchPhrase,
                'nit'=>$Faker->creditCardNumber,
                'phone'=>$Faker->phoneNumber
            ]);
    }
    }
}
