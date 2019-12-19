<?php

use App\Models\Game;
use App\Models\Review;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        User::unguard();

        foreach (range(1, 20) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => $faker->md5,
                'created_at' => $faker->dateTime,
            ]);
        }

        foreach (range(1, 20) as $index) {
            Game::create([
                'title' => $faker->city . ' ' . $faker->safeColorName,
                'release_date' => $faker->date,
                'created_at' => $faker->dateTime,
            ]);
        }

        foreach (range(1, 100) as $index) {
            Review::create([
                'rating' => $faker->numberBetween(1, 5),
                'text' => $faker->sentence,
                'user_id' => User::all()->random()->id,
                'game_id' => Game::all()->random()->id,
            ]);
        }
    }
}
