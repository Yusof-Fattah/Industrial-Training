<?php

namespace Database\Seeders;

use App\Models\WeeklyReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        WeeklyReport::create([
            'title' => 'Test User',
            'image_loc' => '....',
            'description' => 'This is a test user.',
        ]);
    }
}
