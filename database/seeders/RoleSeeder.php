<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $roles = [
            [ 'title' => 'Moderator', 'status' => 1 ],
            [ 'title' => 'Editor', 'status' => 1 ],
            [ 'title' => 'Member', 'status' => 1 ],
        ];

        foreach ( $roles as $role ) {
            $role['slug'] = Str::slug($role['title']);
            Role::create($role);
        }
    }
}
