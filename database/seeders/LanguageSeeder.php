<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LanguageSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $languages = [
            [ 'title' => 'Bengali', 'status' => 1 ],
            [ 'title' => 'English', 'status' => 1 ],
            [ 'title' => 'Arabic', 'status' => 1 ],
            [ 'title' => 'Hindi', 'status' => 1 ],
            [ 'title' => 'Urdu', 'status' => 1 ],
            [ 'title' => 'Persian', 'status' => 1 ],
        ];

        foreach ( $languages as $language ) {
            $language['slug'] = Str::slug($language['title']);
            Language::create($language);
        }
    }
}
