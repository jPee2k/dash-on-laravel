<?php

namespace Database\Factories;

use App\Models\Page;
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
        $name = $this->faker->unique()->name;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => $this->faker->randomElement(['draft', 'publish']),
            'url' => $this->faker->url,
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'image_name' => null,
            'keywords' => null,
        ];
    }
}
