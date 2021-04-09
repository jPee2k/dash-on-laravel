<?php

namespace Database\Factories\Dash;

use App\Models\Dash\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'status' => $this->faker->randomElement(['draft', 'publish']),
            'content_title' => $this->faker->jobTitle,
            'content_data' => $this->faker->text(2000),
            'description' => $this->faker->text,
            'image_name' => null,
            'keywords' => implode(' ', $this->faker->words(rand(0, 5)))
        ];
    }
}
