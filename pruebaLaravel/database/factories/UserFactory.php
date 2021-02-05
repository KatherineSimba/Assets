<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name'=>$this->faker->user_name,
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'phone'=>$this->faker->phone,
            'age'=>$this->faker->age,
            'date'=>$this->faker->date,
            'rol_id'=>$this->faker->randomElement([1]),
            'configuration_id'=>$this->faker->randomElement([1]),
        ];
    }
}
