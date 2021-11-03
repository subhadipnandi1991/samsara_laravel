<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('blogs')->insert(
      [
        'title' => 'Building a New Industrial Workforce: How AI and Digital Tools are Helping Combat the Labor Shortage',
        'description' => 'A new report from ManpowerGroup reveals that “U.S. employer thirst for hiring is at an all-time high”—especially among supply chain industries that have seen a surge in demand during the pandemic era, such as transportation, logistics, and warehousing. Meanwhile, labor shortages in these same industries are also at an all-time high. Companies have been offering both financial and non-financial incentives to attract and retain scarce talent throughout 2021. Now, they are facing the additional pressure of a fast-approaching holiday season, which experts anticipate will further increase demand and exacerbate these existing challenges.',
        'blog-category' => 'Data Insights',
        'author' => 'Sowmya Murali',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/5wz004pqrDXbGAXxo8cGX/8f52dad927f28d41a94ac2903742989a/E01HFLBQTB7-U020YA1AVU7-183462ca0079-512.jpeg',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/3uRY35OYElrXBaSZEgGjbq/7f654e839e35fcd86dbb43af800ca50d/Aug-2020_Data_Insights-Blog_Banner-NN.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-10-26'
      ]);
    }
}
