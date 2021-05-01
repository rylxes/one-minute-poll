<?php

namespace Database\Factories;

use App\Models\FileComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FileComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_id' => $this->faker->randomDigitNotNull,
        'comment' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
