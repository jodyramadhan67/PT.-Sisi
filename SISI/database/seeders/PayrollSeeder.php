<?php

namespace Database\Seeders;

use App\Models\Payroll;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PayrollSeeder extends Seeder
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
            $payroll = new Payroll;

            $payroll->bpjs = $faker->bpjs;
            $payroll->salary = $faker->salary;
            
            $payroll->save();
        }
    }
}
