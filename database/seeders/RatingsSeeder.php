<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating')->insert([
            // Отзывы от пользователя 1
            ['movies_id' => 1, 'review_text' => 'Amazing movie!', 'users_id' => 1],
            ['movies_id' => 2, 'review_text' => 'Loved it!', 'users_id' => 1],
            ['movies_id' => 3, 'review_text' => 'Great Batman movie!', 'users_id' => 1],
            ['movies_id' => 4, 'review_text' => 'Incredible sci-fi experience.', 'users_id' => 1],
            ['movies_id' => 5, 'review_text' => 'A classic that changed cinema.', 'users_id' => 1],
            ['movies_id' => 6, 'review_text' => 'Joaquin Phoenix was outstanding!', 'users_id' => 1],
            ['movies_id' => 7, 'review_text' => 'A beautiful love story.', 'users_id' => 1],
            ['movies_id' => 8, 'review_text' => 'Life is like a box of chocolates.', 'users_id' => 1],
            ['movies_id' => 9, 'review_text' => 'One of the best movies of all time.', 'users_id' => 1],
            ['movies_id' => 10, 'review_text' => 'Heartbreaking and powerful.', 'users_id' => 1],

            // Отзывы от пользователя 2
            ['movies_id' => 1, 'review_text' => 'Nolan did a great job!', 'users_id' => 2],
            ['movies_id' => 2, 'review_text' => 'Best superhero movie ever!', 'users_id' => 2],
            ['movies_id' => 3, 'review_text' => 'Heath Ledger is legendary.', 'users_id' => 2],
            ['movies_id' => 4, 'review_text' => 'Mind-blowing visuals.', 'users_id' => 2],
            ['movies_id' => 5, 'review_text' => 'The Matrix is a masterpiece.', 'users_id' => 2],
            ['movies_id' => 6, 'review_text' => 'Dark, gritty, and intense.', 'users_id' => 2],
            ['movies_id' => 7, 'review_text' => 'A timeless love story.', 'users_id' => 2],
            ['movies_id' => 8, 'review_text' => 'Tom Hanks is brilliant!', 'users_id' => 2],
            ['movies_id' => 9, 'review_text' => 'The Godfather is perfect.', 'users_id' => 2],
            ['movies_id' => 10, 'review_text' => 'Schindler’s List is unforgettable.', 'users_id' => 2],
        ]);
    }
}
