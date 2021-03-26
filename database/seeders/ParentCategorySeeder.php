<?php

namespace Database\Seeders;

use App\Models\ParentCategory;
use Illuminate\Database\Seeder;

class ParentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategory::factory()->count(10)->create();
    }
}
