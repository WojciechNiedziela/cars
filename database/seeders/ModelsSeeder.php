<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for($i=0;$i<60;$i++){
            $data[]=['name'=>$faker->vehicleModel];
        }
        DB::table("models")->insert($data);
    }
}
