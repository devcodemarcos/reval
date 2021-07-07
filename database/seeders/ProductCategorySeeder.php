<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Valvulas', 'Reguladores', 'Cilindros'] as $product) {
            DB::table('product_category')->insert([
                'name' => $product
            ]);
        }
    }
}
