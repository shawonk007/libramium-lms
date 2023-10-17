<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $categories = [
            [ 'title' => 'Adventure', 'status' => 1 ],
            [ 'title' => 'Dystopian', 'status' => 1 ],
            [ 'title' => 'Biography', 'status' => 1 ],
            [ 'title' => 'History', 'status' => 1 ],
            [ 'title' => 'Travel', 'status' => 1 ],
            [ 'title' => 'Health', 'status' => 1 ],
            [ 'title' => 'Detective', 'status' => 1 ],
            [ 'title' => 'Psychology', 'status' => 1 ],
            [ 'title' => 'Spy Thriller', 'status' => 1 ],
            [ 'title' => 'Educational', 'status' => 1 ],
            [ 'title' => 'Political', 'status' => 1 ],
            [ 'title' => 'Mystery', 'status' => 1 ],
            [ 'title' => 'Fantasy', 'status' => 1 ],
            [ 'title' => 'Romance', 'status' => 1 ],
            [ 'title' => 'Horror', 'status' => 1 ],
            [ 'title' => 'Historical', 'status' => 1 ],
            [ 'title' => 'Thriller', 'status' => 1 ],
            [ 'title' => 'Philosophy', 'status' => 1 ],
            [ 'title' => 'Self-Development', 'status' => 1 ],
        ];

        foreach ( $categories as $category ) {
            $category['slug'] = Str::slug($category['title']);
            Category::create($category);
        }
    }
}
