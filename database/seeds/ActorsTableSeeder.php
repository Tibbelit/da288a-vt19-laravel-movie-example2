<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'name' => "Harrison Ford",
                'birthdate' => "1942-07-13",
                'gender' => 2,
            ],
            [
                'name' => "Carrie Fisher",
                'birthdate' => "1956-10-21",
                'gender' => 1,
            ],
            [
                'name' => "Mark Hamill",
                'birthdate' => "1951-09-25",
                'gender' => 2,
            ],
            [
                'name' => "Leonardo DiCaprio",
                'birthdate' => "1974-11-11",
                'gender' => 2,
            ]
        ]);
    }
}
