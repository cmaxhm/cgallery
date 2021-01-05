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
    
    Category::factory()->count(5)->create();
    Tag::factory()->count(5)->create();
    $users = User::factory()->count(5)->create();
    
    foreach ($users as $user) {
      $user->posts()->saveMany(Post::factory()->count(rand(1, 5))->make());
    }
  
    Post::factory()
      ->count(30)
      ->has(Comment::factory()->count(rand(0, 15)))
      ->create();
    
    $posts = Post::all();
    
    foreach ($posts as $post) {
      $post->tags()->saveMany(Tag::all()->random(rand(0, 5)));
    }
  }
}
