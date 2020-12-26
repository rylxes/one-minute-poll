<?php

namespace Database\Factories;

use App\Models\HealthPredictor;
use Illuminate\Database\Eloquent\Factories\Factory;

class HealthPredictorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HealthPredictor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'blood_group' => $this->faker->word,
        'is_hereditary_issue' => $this->faker->word,
        'is_current_health_injury' => $this->faker->word,
        'is_receiving_treatment' => $this->faker->word,
        'is_long_term_injury' => $this->faker->word,
        'hereditary_issue' => $this->faker->word,
        'long_term_injury' => $this->faker->word,
        'treatment_type' => $this->faker->word,
        'current_health_injury' => $this->faker->word,
        'is_personal_health_challenge' => $this->faker->word,
        'personal_health_challenge' => $this->faker->word,
        'injury_seriousness' => $this->faker->word,
        'medical_treatment' => $this->faker->word,
        'injury_location' => $this->faker->word,
        'genotype' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
