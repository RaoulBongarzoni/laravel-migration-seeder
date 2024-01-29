<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 2; $i < 13; $i++) {
            $newTrain = new Train();
            //$newTrain->id
            $newTrain->partenza = $faker->time();
            $newTrain->azienda = $faker->company();
            $newTrain->arrivo = $faker->time();
            $newTrain->codice = $faker->randomNumber(8, true);
            $newTrain->carrozze = $faker->numberBetween(7, 15);
            $newTrain->ritardo = $faker->randomNumber(3, false);
            $newTrain->save();
        }
    }
}
