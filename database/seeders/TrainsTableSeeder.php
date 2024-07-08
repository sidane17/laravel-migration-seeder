<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
        $frecciaR= new Train();
        $frecciaR->Azienda=$faker->company;
        $frecciaR->Stazione_di_partenza=$faker->city;
        $frecciaR->Stazione_di_arrivo=$faker->city;
        $frecciaR->codice_treno=$faker->numberBetween(1651,7415);
        $frecciaR->numero_carrozze=$faker->numberBetween(1,20);
        $frecciaR->save();
        }
        

    }
}
