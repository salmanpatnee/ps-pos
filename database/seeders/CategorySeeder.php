<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Cream', 'Drop', 'Gel', 'General', 'Herbal', 'Injection', 'Lotion', 'Ointment', 'Sachet', 'Surgical', 'Solution', 'Spray', 'Syrup', 'Tablet'];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
