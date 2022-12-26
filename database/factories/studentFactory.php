<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = faker::create('id_ID');
        $array = array("L", "P");
        return [
            'nama' => $faker->name,
            'gender' => $array[array_rand($array, 1)],
            'nis' => $faker->numberBetween(100001, 100500),
            'kelas_id' => $faker->numberBetween(1, 4),
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ];
    }
}
