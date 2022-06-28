<?php

use Faker\Generator as Faker;

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train;

            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(1000, 2000);
            $train->numero_carrozze = $faker->numberBetween(1, 10);
            $train->on_time = $faker->numberBetween(0, 1);
            $train->is_canceled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}