<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $book = new Book();
            // $book->setTitle($faker->title);
            // $book->setISBN($faker->ISBN);
            // $book->setSummary($faker->text);
            // $book->setPrice($faker->randomNumber(2));
            'title' => fake()->title(),
            'Pages' =>fake()->buildingNumber(),
            'Rating' =>fake()->randomDigit(),
            'isbn' =>fake()->randomDigit (),
            'publishDate' =>fake()->creditCardExpirationDate()

        ];
    }
}
