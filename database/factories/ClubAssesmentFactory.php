<?php

namespace Database\Factories;

use App\Models\ClubAssesment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubAssesmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClubAssesment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'enjoy_practice_routines' => $this->faker->word,
        'is_participated_in_competitions' => $this->faker->word,
        'is_selected_to_represent' => $this->faker->word,
        'competitions' => $this->faker->text,
        'motivation' => $this->faker->text,
        'achievement' => $this->faker->text,
        'admired_sportsperson' => $this->faker->word,
        'top_athlete_plans' => $this->faker->text,
        'current_team' => $this->faker->word,
        'date_joined_team' => $this->faker->date('Y-m-d H:i:s'),
        'favourite_jersey_number' => $this->faker->word,
        'nickname' => $this->faker->word,
        'favourite_sports_team' => $this->faker->word,
        'why_like_team' => $this->faker->word,
        'no_of_teams_played_for' => $this->faker->randomDigitNotNull,
        'why_leave' => $this->faker->word,
        'can_improve_in_team' => $this->faker->word,
        'is_like_coach_team' => $this->faker->word,
        'positions_play' => $this->faker->word,
        'preferred_foot' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
