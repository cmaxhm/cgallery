<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    $this->call([
      OptionsSeeder::class,
      CountrySeeder::class
    ]);
    
    Category::factory()
      ->times(5)
      ->has(Post::factory()
        ->times(10)
        ->has(User::factory(), 'user')
        ->has(Tag::factory()->count(rand(1, 10)), 'tags'), 'posts')
      ->create();
  }
}
