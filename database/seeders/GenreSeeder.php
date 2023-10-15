<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $genres = [
            [ 'title' => 'Fiction', 'status' => 1 ],
            [ 'title' => 'Non-Fiction', 'status' => 1 ],
            [ 'title' => 'Mystery', 'status' => 1 ],
            [ 'title' => 'Fantasy', 'status' => 1 ],
            [ 'title' => 'Romance', 'status' => 1 ],
            [ 'title' => 'Horror', 'status' => 1 ],
            [ 'title' => 'Historical', 'status' => 1 ],
            [ 'title' => 'Thriller', 'status' => 1 ],
            [ 'title' => 'Young Adult', 'status' => 1 ],
            [ 'title' => 'Children', 'status' => 1 ],
        ];

        foreach ( $genres as $genre ) {
            $genre['slug'] = Str::slug($genre['title']);
            Genre::create($genre);
        }
    }
}
