<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valves = [
            'Válvula de aguja 1/4"' => [
                'slug' => 'valvula-aguja-14',
                'photo' => 'valvula-de-aguja-14.jpg'
            ],
            'Válvula de aguja 1/2"' => [
                'slug' => 'valvula-aguja-12',
                'photo' => 'valvula-de-aguja-12.jpg'
            ],
            'Válvula de aguja 3/4"' => [
                'slug' => 'valvula-aguja-34',
                'photo' => 'valvula-de-aguja-34.jpg'
            ],
            'Válvula de aguja 1"' => [
                'slug' => 'valvula-aguja-1',
                'photo' => 'valvula-de-aguja-1.jpg'
            ]
        ];
        
        foreach ($valves as $valve => $properties) {
            DB::table('products')->insert([
                'name' => $valve,
                'slug' => $properties['slug'],
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum',
                'photo' => $properties['photo'],
                'file' => Hash::make('file') . '.pdf',
                'tags' => 'Valvulas,Reguladores,Reval,Toluca,Calidad,Innovacion',
                'product_category_id' => 1
            ]);
        }

        $regulators = [
            'Regulador de presion 400' => [
                'slug' => 'regulador-presion-400',
                'photo' => 'regulador-presion-400.jpg'
            ]
        ];

        foreach ($regulators as $regulator => $properties) {
            DB::table('products')->insert([
                'name' => $regulator,
                'slug' => $properties['slug'],
                'description' => 'El propósito de la válvula modelo 400 de Reval es el de reducir la entrada de presión de alta a baja y mantenerla baja. El cambio de la presión de entrada puede ser de variación pequeña, regular, grande o con inesperados cambios de energía, pero la presión de salida permanecerá constante.',
                'photo' => $properties['photo'],
                'file' => Hash::make('file') . '.pdf',
                'tags' => 'Valvulas,Reguladores,Reval,Toluca,Calidad,Innovacion',
                'product_category_id' => 2
            ]);
        }
    }
}
