<?php

namespace Database\Factories;

use App\Models\PsychPredictor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PsychPredictorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PsychPredictor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'time_practice_in_week' => $this->faker->randomDigitNotNull,
        'hours_practice_in_week' => $this->faker->randomDigitNotNull,
        'is_parent_in_support' => $this->faker->word,
        'is_team_player' => $this->faker->word,
        'parent_in_support_reason' => $this->faker->word,
        'challenges' => $this->faker->word,
        'greatest_motivation' => $this->faker->word,
        'strength' => $this->faker->word,
        'weakness' => $this->faker->word,
        'can_overcome_challenges' => $this->faker->word,
        'time_start_sport' => $this->faker->word,
        'rating_sports' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
