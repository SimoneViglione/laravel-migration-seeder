<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<3; $i++) {

            $train = new Train();

            $train->company = 'Trenitalia';
            $train->departure = $faker->randomElements(['Roma', 'Savona', 'Torino']);
            $train->arrival = $faker->randomElements(['Milano', 'Napoli', 'Aosta']);
            $train->departure_time = $faker->dateTime->format('Y-m-d H_i_s');
            $train->arrival_time = $faker->dateTime->format('Y-m-d H_i_s');
            $train->train_code = $faker->randomNumber(6, true);
            $train->train_car_number = $faker->randomDigitNotNull();
            $train->on_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();

        }
    }
}
