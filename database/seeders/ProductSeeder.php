<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 25 ; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(35),
                'description' => Str::random(250),
                'photo' => Hash::make('photo') . '.jpg',
                'file' => Hash::make('file') . '.pdf',
                'tags' => 'Valvulas,Reguladores,Reval,Toluca,Calidad,Innovacion',
                'product_category_id' => random_int(1, 3)
            ]);
        }
    }
}
