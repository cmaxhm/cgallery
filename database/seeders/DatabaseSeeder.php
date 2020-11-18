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
      ->times(20)
      ->has(Post::factory()
        ->times(200)
        ->has(User::factory()->times(1), 'user'), 'post')
      ->create();
  }
}
