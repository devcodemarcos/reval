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
        foreach (['valvulas' => 'Válvulas', 'reguladores' => 'Reguladores', 'cilindros' => 'Cilindros'] as $slug => $product) {
            DB::table('product_category')->insert([
                'name' => $product,
                'slug' => $slug
            ]);
        }
    }
}
