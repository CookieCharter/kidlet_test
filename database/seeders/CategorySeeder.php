<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Pantaloni scurți'
        ]);
        Category::create([
            'name' => 'Pantaloni'
        ]);
        Category::create([
            'name' => 'Bluze'
        ]);
        Category::create([
            'name' => 'Tricouri'
        ]);
        Category::create([
            'name' => 'Geci'
        ]);
        Category::create([
            'name' => 'Veste'
        ]);
    }
}
