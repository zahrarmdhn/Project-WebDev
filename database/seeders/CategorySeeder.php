<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert categories into the database
        DB::table('categories')->insert([
            ['category' => 'History'],
            ['category' => 'Biography'],
            ['category' => 'Science'],
            ['category' => 'Fantasy'],
            ['category' => 'Fiction'],
            ['category' => 'Non-Fiction'],
        ]);
    }
}
