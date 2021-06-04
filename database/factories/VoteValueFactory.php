<?php

namespace Database\Factories;

use App\Models\VoteValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VoteValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poll_type_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'value' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
