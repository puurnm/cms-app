<?php

namespace Database\Factories;

use App\Models\writer;
use Illuminate\Database\Eloquent\Factories\Factory;

class writerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = writer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'email' => $this->faker->word,
        'hobi' => $this->faker->word,
        'pekerjaan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
