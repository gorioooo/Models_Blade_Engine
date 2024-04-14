<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
{
	return [
		'name' => fake()->name(),
		'email' => fake()->unique()->safeEmail(),
		'email_verified_at' => now(),
		'password' => static::$password ??=Hash,
		'remember_token' => Str::random(10),
	];
}
}
