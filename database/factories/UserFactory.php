<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

class UserFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;
  
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $username = $this->faker->unique()->userName;
    
    return [
      'name' => $this->faker->firstName,
      'last_name' => $this->faker->lastName,
      'username' => $username,
      'email' => $username.'@mail.com',
      'birth_date' => $this->faker->date(),
      'avatar' => 'https://picsum.photos/id/'.$this->faker->numberBetween(0, 1000).'/200',
      'country' => Country::all()->random()->first()->id,
      'points' => $this->faker->numberBetween(0, 50000),
      'is_admin' => false,
      'is_banned' => false,
      'email_verified_at' => now(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'remember_token' => Str::random(10),
    ];
  }
}
