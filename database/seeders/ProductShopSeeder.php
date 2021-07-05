<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProductShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_shop')->insert(
            [
                'product_id' => 1,
                'shop_id' => 1,
            ],
           
        );

        DB::table('product_shop')->insert(
           
            [
                'product_id' => 2,
                'shop_id' => 1,
            ],
        );
    }
}
