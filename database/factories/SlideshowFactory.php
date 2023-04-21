<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Slideshow;

class SlideshowFactory extends Factory
{
    protected $model = Slideshow::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Use Faker to generate dummy data
            'title' => $this->faker->name(),
            'subtitle' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(5),
            'active' => $this->faker->randomElement([1, 0]),
            'ordernum' => $this->faker->numberBetween(1, 100),
            'img' => $this->faker->randomElement(['bg-1.jpg', 'bg-2.jpg', 'bg-3.jpg', 'bg-4.jpg', 'bg-5.jpg'])
        ];
    }
}
