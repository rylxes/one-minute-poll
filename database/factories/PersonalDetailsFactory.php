<?php

namespace Database\Factories;

use App\Models\PersonalDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'first_name' => $this->faker->word,
        'marital_status' => $this->faker->word,
        'mother_maiden_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'height' => $this->faker->word,
        'body_weight' => $this->faker->word,
        'phone' => $this->faker->word,
        'sm_handle' => $this->faker->word,
        'highest_education' => $this->faker->word,
        'place_of_birth' => $this->faker->word,
        'school' => $this->faker->word,
        'career_preference' => $this->faker->word,
        'is_still_schooling' => $this->faker->word,
        'contact_address' => $this->faker->text,
        'dob' => $this->faker->date('Y-m-d H:i:s'),
        'country_id' => $this->faker->randomDigitNotNull,
        'state_of_origin' => $this->faker->randomDigitNotNull,
        'zipcode' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
