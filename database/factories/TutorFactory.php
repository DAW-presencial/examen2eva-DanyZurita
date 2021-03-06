<?php

namespace Database\Factories;

use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TutorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tutor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id,
            'name' => $this->faker->name,
            'lastname1' => $this->faker->lastName1,
            'lastname2' => $this->faker->lastName2,
            'phone' => $this->faker->phone,
            'email' => $this->faker->email,
            'dni' => $this->faker->unique()->dni,
            'company' => $this->faker->companys,
            'status' => $this->faker->status,
            
            'remember_token' => Str::random(10),
        ];
    }
}
