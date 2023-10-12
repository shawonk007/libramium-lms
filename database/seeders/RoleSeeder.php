<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $roles = [
            [ 'title' => 'Moderator', 'slug' => 'moderator', 'status' => 1 ],
            [ 'title' => 'Editor', 'slug' => 'editor', 'status' => 1 ],
            [ 'title' => 'Member', 'slug' => 'member', 'status' => 1 ],
        ];

        foreach ( $roles as $role ) {
            Role::create($role);
        }
    }
}
