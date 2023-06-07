<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            "nama" => "Solihin",
            "username" => "Solihinn",
            "password" => "yuhuuu123",
            "email" => "solihinnn@gmail.com",
            "role" => "Administrator"
        ]);

        User::create([
            "nama" => "Solihin",
            "username" => "Solihinnn",
            "password" => "Mautauaja",
            "email" => "Solihinn2310@gmail.com",
            "role" => "User"
        ]);

        User::create([
            "nama" => "Example",
            "username" => "example",
            "password" => "exm1234#!",
            "email" => "example@gmail.com",
            "role" => "User"
        ]);
    }
}
