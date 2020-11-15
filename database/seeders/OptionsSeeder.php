<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('options')->insert([
      'option' => 'description',
      'value' => 'cGallery images and videos gallery'
    ]);
    DB::table('options')->insert([
      'option' => 'favicon',
      'value' => 'favicon_url'
    ]);
    DB::table('options')->insert([
      'option' => 'posts_per_page',
      'value' => '10'
    ]);
  }
}
