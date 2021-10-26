<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products-overview')->insert([
        'product-category' => 'Site Visibility'
      ],
      [
        'product-category' => 'Data & Integrations'
      ],
      [
        'product-category' => 'Hardware'
      ]
    );

    }
}
