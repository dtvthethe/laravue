<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Ao thun',
        ]);

        Product::create([
            'name' => 'Ao somi',
        ]);

        Product::create([
            'name' => 'Giay',
        ]);
    }
}
