<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// faker
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $book                   = new Book();
            $book->title            = $faker->sentence(3);
            $book->author           = $faker->name();
            $book->publisher        = $faker->company();
            $book->publication_year = $faker->year();
            $genres                 = ['fantasy', 'thriller', 'horror', 'sci-fi', 'detective', 'romance', 'adventure'];
            $book->genre            = $faker->randomElement($genres);
            $book->isbn             = $faker->isbn13();
            $book->number_of_pages  = $faker->numberBetween(100, 1000);
            $book->available        = $faker->boolean(70);
            $conditions             = ['new', 'used', 'damaged'];
            $book->book_condition   = $faker->randomElement($conditions);
            $book->save();
        }
    }
}
