<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Frontend Dev',
            'slug' => 'frontend-dev'
        ]);
        Category::create([
            'name' => 'Backend Dev',
            'slug' => 'backend-dev'
        ]);
        Category::create([
            'name' => 'Fullstack Dev',
            'slug' => 'fullstack-dev'
        ]);
        Category::create([
            'name' => 'App Dev',
            'slug' => 'app-dev'
        ]);
        Category::create([
            'name' => 'Pentester',
            'slug' => 'pentester'
        ]);
    }
}
