<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $users = [
            [ 'role_id' => 1, 'firstname' => 'Sayem', 'lastname' => 'Pathan', 'username' => 'sayem.pathan', 'email' => 'sayem@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (012) 34-567892', 'password' => Hash::make('secret') ],
            [ 'role_id' => 2, 'firstname' => 'Mohona', 'lastname' => 'Akter', 'username' => 'mohona.akter', 'email' => 'mohona@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (012) 34-567893', 'password' => Hash::make('secret') ],
            [ 'role_id' => 3, 'firstname' => 'Shorifa', 'lastname' => 'Akter', 'username' => 'shorifa.akter', 'email' => 'shorifa@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (012) 34-567894', 'password' => Hash::make('secret') ],
        ];

        foreach ( $users as $user ) {
            User::create($user);
        }
    }
}
