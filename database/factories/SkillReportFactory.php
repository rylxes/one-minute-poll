<?php

namespace Database\Factories;

use App\Models\SkillReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SkillReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'speed' => $this->faker->word,
        'passing' => $this->faker->word,
        'shooting' => $this->faker->word,
        'dribbling' => $this->faker->word,
        'heading' => $this->faker->word,
        'ball_control' => $this->faker->word,
        'fitness' => $this->faker->word,
        'movement' => $this->faker->word,
        'awareness' => $this->faker->word,
        'decisions' => $this->faker->word,
        'workrate' => $this->faker->word,
        'strength' => $this->faker->word,
        'crossing' => $this->faker->word,
        'finishing' => $this->faker->word,
        'positioning' => $this->faker->word,
        'anticipation' => $this->faker->word,
        'total' => $this->faker->word,
        'overall_grade' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
