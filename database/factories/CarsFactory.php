<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new \Faker\Provider\FakeCar($this->faker));

        return [
            "name" => $this->faker->unique()->vehicleBrand,
            "merk" => $this->faker->unique()->vehicleBrand,
            "created_at" => $this->faker->dateTimeThisDecade("now", "Europe/Amsterdam"),
            "updated_at" => $this->faker->dateTimeThisDecade("now", "Europe/Amsterdam")
        ];
    }
}
