<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;
use HasFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*Models\User::truncate();
        Models\Category::truncate();
        Models\Post::truncate();*/

        Models\Post::factory(5)->create();
    }
}
