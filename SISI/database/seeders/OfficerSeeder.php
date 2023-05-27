<?php

namespace Database\Seeders;

use App\Models\Officer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            $officer = new Officer;

            $officer->name = $faker->name;
            $officer->tittle = $faker->tittle;
            $officer->year = $faker->year;
            $officer->annual_leave = $faker->annual_leave;
            
            $officer->save();
        }
    }
}
