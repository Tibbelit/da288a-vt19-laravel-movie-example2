<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => "Star Wars",
                'year' => 1977,
                'poster' => 'https://s-media-cache-ak0.pinimg.com/736x/77/fb/b0/77fbb0d293fd6770389c9c6b3e87d7a6.jpg',
            ],
            [
                'title' => "Titanic",
                'year' => 1997,
                'poster' => 'https://www.movieposter.com/posters/archive/main/142/MPW-71146',
            ],
            [
                'title' => "Inception",
                'year' => 2010,
                'poster' => 'http://www.impawards.com/2010/posters/inception.jpg',
            ],
            [
                'title' => "Blade runner",
                'year' => 1982,
                'poster' => 'http://i.ebayimg.com/images/i/191110117883-0-1/s-l1000.jpg',
            ]
        ]);
    }
}
