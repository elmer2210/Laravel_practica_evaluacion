<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreUsuario' => $this->faker->userName,
            'nombreCompleto' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefono'=>$this->faker->phoneNumber ,
            'edad'=>$this->faker->numberBetween($min = 10, $max =99),
            'fechaNacimiento'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            //'configuration_id'=>1, 

        ];
    }
}
