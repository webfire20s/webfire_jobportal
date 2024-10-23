<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostersCategory;

class PostersCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the categories to be seeded
        $categories = [
            ['name' => 'Job Vacancy', 'status' => 1],
            ['name' => 'Educational', 'status' => 1],
            ['name' => 'Yojna', 'status' => 1],
        ];

        // Insert the categories into the database
        PostersCategory::insert($categories);
    }
}
