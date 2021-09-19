<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_id' => mt_rand(1,3),
            'user_id'     => mt_rand(1,3),
            'title'       => $this->faker->sentence(mt_rand(3,10)),
            'slug'        => $this->faker->slug(),
            'image'       => 'image.jpg',
            'excerpt'     => $this->faker->paragraph(),
            'body'        => $this->faker->paragraph(mt_rand(6,10)),

        ];
    }
}
