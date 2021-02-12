<?php

namespace Database\Factories;

use App\Models\Plans;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlansFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plans::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->word,
        'name' => $this->faker->text,
        'description' => $this->faker->text,
        'is_active' => $this->faker->word,
        'price' => $this->faker->word,
        'signup_fee' => $this->faker->word,
        'currency' => $this->faker->word,
        'trial_period' => $this->faker->word,
        'trial_interval' => $this->faker->word,
        'invoice_period' => $this->faker->word,
        'invoice_interval' => $this->faker->word,
        'grace_period' => $this->faker->word,
        'grace_interval' => $this->faker->word,
        'prorate_day' => $this->faker->word,
        'prorate_period' => $this->faker->word,
        'prorate_extend_due' => $this->faker->word,
        'active_subscribers_limit' => $this->faker->word,
        'sort_order' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
