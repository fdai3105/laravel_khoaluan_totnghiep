<?php

namespace Database\Seeders;

use App\Models\ParentCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(BrandSeeder::class);
        $this->call(ParentCategorySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(RatingSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
