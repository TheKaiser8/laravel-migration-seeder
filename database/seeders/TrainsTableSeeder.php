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
        for ($i = 0; $i <= 20; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->train_code = $faker->numberBetween(1, 30000);
            $new_train->carriages_number = $faker->numberBetween(4, 15);
            $new_train->is_on_time = $faker->numberBetween(0, 1);
            $new_train->is_deleted = $faker->numberBetween(0, 1);
            $new_train->railway = $faker->numberBetween(1, 20);
            $new_train->save();
        }
    }
}
