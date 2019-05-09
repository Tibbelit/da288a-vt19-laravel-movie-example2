<?php

use Illuminate\Database\Seeder;

class GradesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'rating' => 5,
                'comment' => "Sjuuukt bra film!",
                'movie_id' => 1,
            ],
            [
                'rating' => 4,
                'comment' => "Lite trist att den sjunker bara...",
                'movie_id' => 2,
            ],
            [
                'rating' => 4,
                'comment' => "Dröm i en dröm i en dröm...",
                'movie_id' => 4,
            ],
            [
                'rating' => 4,
                'comment' => "Mind blown!",
                'movie_id' => 4,
            ]
        ]);
    }
}
