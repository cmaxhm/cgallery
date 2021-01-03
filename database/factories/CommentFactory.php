<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory {
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Comment::class;
  
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    return [
      'user' => User::all()->random(1)->first()->id,
      'post' => Post::factory(),
      'content' => $this->faker->paragraph,
      'created_at' => now(),
      'updated_at' => now(),
    ];
  }
}
