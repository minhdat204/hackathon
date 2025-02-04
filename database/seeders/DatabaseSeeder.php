<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            ['id' => 1, 'username' => 'thaytien', 'password' => '123456', 'name' => 'thầy Tiến', 'bridthday' => NULL, 'img' => '', 'islike' => 0, 'status' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 2, 'username' => 'thayhao', 'password' => '123456', 'name' => 'thầy Hảo', 'bridthday' => NULL, 'img' => '', 'islike' => 0, 'status' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 3, 'username' => 'thaykhacanh', 'password' => '123456', 'name' => 'thầy khắc Anh', 'bridthday' => NULL, 'img' => '', 'islike' => 0, 'status' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 4, 'username' => '0306221011', 'password' => '15102004', 'name' => 'thầy Tiến', 'bridthday' => '2004-10-15', 'img' => '', 'islike' => 0, 'status' => 1, 'created_at' => NULL, 'updated_at' => NULL],
        ]);

    }
}
