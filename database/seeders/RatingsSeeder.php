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
            ['movies_id' => 1, 'review_text' => 'Amazing movie!', 'users_id' => 1],
            ['movies_id' => 2, 'review_text' => 'Loved it!', 'users_id' => 2],
        ]);
    }
}
