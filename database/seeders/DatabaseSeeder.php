<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
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
      ->count(1)
      ->has(Post::factory()
        ->count(1)
        ->has(User::factory(), 'user')
        ->has(Tag::factory()->count(rand(0, 20)), 'tags')
        ->has(Comment::factory(), 'comments'), 'posts')
      ->create();
  }
}
