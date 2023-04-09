<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 5 utilisateurs sont générés et sauvegardés
        User::factory(20)->create();

        DB::table('users')->insert([
            "first_name" => "Mirror World",
            "last_name" => "Festival",
            "email" => "admin@mirror-world.com",
            "email_verified_at" => now(),
            "password" => "$2y$10\$tybdPkpGoYJPmdxZvyeIMOWKF.OVOwBtVq/ssFBhoopTym6KE3E/O", // projetweb2admin
            "privilege_id" => 1,
            "deleted_at" => null,
            "remember_token" => "blablablanimportequoi2",
        ]);

        DB::table('users')->insert([
            "first_name" => "Julien",
            "last_name" => "Duranleau",
            "email" => "julien@prof.dev",
            "email_verified_at" => now(),
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            "privilege_id" => 1,
            "deleted_at" => null,
            "remember_token" => "blablablanimportequoi1",

        ]);

        DB::table('users')->insert([
            "first_name" => "Marie",
            "last_name" => "Bertrand",
            "email" => "marie@prof.com",
            "email_verified_at" => now(),
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            "privilege_id" => 1,
            "deleted_at" => now(),
            "remember_token" => "blablablanimportequoi3",

        ]);

        DB::table('users')->insert([
            "first_name" => "Patricia",
            "last_name" => "Massie",
            "email" => "patricia.massie@outlook.com",
            "email_verified_at" => now(),
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            "privilege_id" => 2,
            "deleted_at" => now(),
            "remember_token" => "blablablanimportequoi4",
        ]);
    }
}
