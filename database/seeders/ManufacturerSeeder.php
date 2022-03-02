<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = ['Abbot', 'Adamjee', 'Al Chemy Health', 'Atco', 'B&B', 'Barret', 'Biocell', 'Bisconi', 'Canbebe', 'Cibex'];

        foreach ($manufacturers as $manufacturer) {
            Manufacturer::create([
                'name' => $manufacturer
            ]);
        }
    }
}
