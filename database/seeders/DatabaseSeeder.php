<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
      ->times(50)
      ->create();
    
    User::factory()
      ->times(10)
      ->has(Post::factory()->count(5), 'posts')
      ->create();
  }
}
