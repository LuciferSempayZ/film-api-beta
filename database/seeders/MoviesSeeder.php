<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'release_year' => 2010,
                'duration' => 148,
                'description' => 'A mind-bending thriller by Christopher Nolan.',
                'photo' => 'inception.jpg',
                'studio_id' => 1,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/447301/',
            ],
            [
                'title' => 'Avengers: Endgame',
                'release_year' => 2019,
                'duration' => 181,
                'description' => 'The epic conclusion to the Marvel saga.',
                'photo' => 'endgame.jpg',
                'studio_id' => 2,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/843650/',
            ],
            [
                'title' => 'The Dark Knight',
                'release_year' => 2008,
                'duration' => 152,
                'description' => 'Christopher Nolan\'s masterpiece about Batman.',
                'photo' => 'dark_knight.jpg',
                'studio_id' => 3,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/111543/',
            ],
            [
                'title' => 'Interstellar',
                'release_year' => 2014,
                'duration' => 169,
                'description' => 'A sci-fi epic by Christopher Nolan.',
                'photo' => 'interstellar.jpg',
                'studio_id' => 1,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/258687/',
            ],
            [
                'title' => 'The Matrix',
                'release_year' => 1999,
                'duration' => 136,
                'description' => 'A revolutionary sci-fi action film.',
                'photo' => 'matrix.jpg',
                'studio_id' => 4,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/301/',
            ],
            [
                'title' => 'Joker',
                'release_year' => 2019,
                'duration' => 122,
                'description' => 'A dark psychological thriller about the origins of the Joker.',
                'photo' => 'joker.jpg',
                'studio_id' => 5,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/1048334/',
            ],
            [
                'title' => 'Titanic',
                'release_year' => 1997,
                'duration' => 195,
                'description' => 'A love story set on the ill-fated Titanic.',
                'photo' => 'titanic.jpg',
                'studio_id' => 6,
                'age_rating_id' => 2,
                'watch_url' => 'https://www.kinopoisk.ru/film/2213/',
            ],
            [
                'title' => 'Forrest Gump',
                'release_year' => 1994,
                'duration' => 142,
                'description' => 'The story of a simple man who witnessed historical events.',
                'photo' => 'forrest_gump.jpg',
                'studio_id' => 7,
                'age_rating_id' => 2,
                'watch_url' => 'https://www.kinopoisk.ru/film/448/',
            ],
            [
                'title' => 'The Godfather',
                'release_year' => 1972,
                'duration' => 175,
                'description' => 'The greatest gangster film ever made.',
                'photo' => 'godfather.jpg',
                'studio_id' => 8,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/325/',
            ],
            [
                'title' => 'Schindler\'s List',
                'release_year' => 1993,
                'duration' => 195,
                'description' => 'A heartbreaking story of the Holocaust.',
                'photo' => 'schindlers_list.jpg',
                'studio_id' => 9,
                'age_rating_id' => 3,
                'watch_url' => 'https://www.kinopoisk.ru/film/329/',
            ],
        ]);
    }
}
