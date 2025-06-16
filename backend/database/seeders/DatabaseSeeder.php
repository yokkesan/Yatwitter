<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tweet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // ユーザー10人生成
    User::factory(10)->create();

    // ツイート30件生成（ユーザーと紐づく）
    Tweet::factory(30)->create();
}
}
