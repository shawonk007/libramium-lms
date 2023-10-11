<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $admins = [
            [ 'firstname' => 'Shawon', 'lastname' => 'Khan', 'username' => 'shawonk007', 'email' => 'shawonk007@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (016) 88-947741', 'password' => Hash::make('Dhaka1216') ],
            [ 'firstname' => 'Sumona', 'lastname' => 'Akter', 'username' => 'sapriya27', 'email' => 'sapriya27@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (012) 34-567890', 'password' => Hash::make('admin') ],
            [ 'firstname' => 'Muntana', 'lastname' => 'Annie', 'username' => 'muntaha.annie', 'email' => 'muntaha@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (012) 34-567891', 'password' => Hash::make('secret') ],
        ];

        foreach ( $admins as $admin) {
            Admin::create($admin);
        }
    }
}
