<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'New Features'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Fleet Safety'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'ELD'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Electric Vehicles'
         ]);


         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Fleet Management'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Routing'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Maintenance'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Temperature Monitoring'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Asset Tracking'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Company News'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Customer Stories'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Data Insights'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Remote Monitoring'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Condition Monitoring'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Connected Sites'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Life at Samsara'
         ]);

         DB::table('blog_categories')->insert(
         [
           'blog-category' => 'Engineering at Samsara'
         ]);

    }
}
