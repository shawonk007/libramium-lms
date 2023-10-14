<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $authors = [
            [ 'name' => 'Omar Khayyam', 'birth_date' => '1048-05-18', 'death_date' => '1131-12-04', 'gender' => 1, 'religion' => 1, 'status' => 1 ],
            [ 'name' => 'Jalaluddin Muhammad Rumi', 'birth_date' => '1207-09-30', 'death_date' => '1273-12-17', 'gender' => 1, 'religion' => 1, 'status' => 1 ],
            [ 'name' => 'Kazi Nazrul Islam', 'birth_date' => '1899-05-24', 'death_date' => '1976-08-29', 'gender' => 1, 'religion' => 1, 'status' => 1 ],
            [ 'name' => 'Farrukh Ahmed', 'birth_date' => '1918-06-10', 'death_date' => '1974-10-19', 'gender' => 1, 'religion' => 1, 'status' => 1 ],
            [ 'name' => 'Rabindranath Tagore', 'birth_date' => '1861-05-07', 'death_date' => '1941-08-07', 'gender' => 1, 'religion' => 3, 'status' => 1 ],
            [ 'name' => 'Sarat Chandra Chattopadhyay', 'birth_date' => '1876-09-15', 'death_date' => '1938-01-16', 'gender' => 1, 'religion' => 3, 'status' => 1 ],
            [ 'name' => 'William Shakespeare', 'birth_date' => '1564-04-26', 'death_date' => '1616-04-23', 'gender' => 1, 'religion' => 2, 'status' => 1 ],
            [ 'name' => 'John Milton', 'birth_date' => '1608-09-23', 'death_date' => '1674-11-08', 'gender' => 1, 'religion' => 2, 'status' => 1 ],
            [ 'name' => 'Percy Bysshe Shelley', 'birth_date' => '1792-08-04', 'death_date' => '1822-07-08', 'gender' => 1, 'religion' => 2, 'status' => 1 ],
            // [ 'name' => '', 'birth_date' => '', 'death_date' => '', 'gender' => 1, 'religion' => 1, 'status' => 1 ],
        ];

        foreach ( $authors as $author ) {
            $author['slug'] = Str::slug($author['name']);
            Author::create($author);
        }
    }
}
