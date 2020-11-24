<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory {
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Tag::class;
  
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    $name = $this->faker->unique()->sentence(rand(1, 3));
    $name = str_replace('.', '', $name);
  
    return [
      'name' => $name,
      'slug' => Str::slug($name, '-')
    ];
  }
}
