<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
      $title = $this->faker->sentence;
      
      return [
        'user' => User::all()->random(1)->first()->id,
        'title' => $title,
        'thumbnail' => 'https://picsum.photos/id/'.$this->faker->numberBetween(0, 500).'/'.$this->faker->numberBetween(100, 500).'/'.$this->faker->numberBetween(100, 500),
        'category' => Category::all()->random(1)->first()->id,
        'type' => 'video',
        'slug' => Str::slug($title, '-'),
        'likes' => $this->faker->numberBetween(0, 5000),
        'dislikes' => $this->faker->numberBetween(0, 5000),
        'content' => $this->faker->text(),
        'created_at' => now(),
        'updated_at' => now(),
      ];
    }
}
