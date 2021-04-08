<?php

namespace Database\Factories\Dash;

use App\Models\Dash\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'description' => $this->faker->text,
            'image_name' => null,
            'keywords' => null,
        ];
    }
}
