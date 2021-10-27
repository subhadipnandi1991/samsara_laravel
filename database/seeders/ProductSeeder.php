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
      DB::table('products')->insert(
      [
        'product-category' => 'Video-Based Safety'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Vehicle Telematics'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Apps & Driver Workflows'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Equipment Monitoring'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Site Visibility'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Data & Integrations'
      ]);
      DB::table('products')->insert(
      [
        'product-category' => 'Hardware'
      ]);
  }
}
