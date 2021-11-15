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
        'title' => 'Celebrating Hispanic Heritage Month at Samsara',
        'description' => 'Happy Hispanic Heritage Month! An annual celebration from September 15 to October 15, Hispanic Heritage Month honors the cultures and contributions of both Hispanic and Latinx Americans in the United States. This year, Samsara’s Latinx employee resource group (ERG) celebrated with a virtual “Keep Calm and Have a Cafecito” event, as well as weekly facts about the Latinx community shared in Samsara’s Latinx community and allies Slack channel. Read on to meet a few members of Samsara’s Latinx ERG and hear how they’re celebrating this Hispanic Heritage Month.',
        'blog-category-id' => '16',
        'author' => 'Molly Weber',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/3FJINs1Ew8iO6OHiL8V9lX/e84a64f018d04f414bd8c288189cff28/molly-weber.png',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/2vFGvQbhGjyURILnY3iRyB/e483c73eba2566a19e6ad56ce5961be0/2_SPOTLIGHT_HEADER.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-10-7'
      ]);

      DB::table('blogs')->insert(
      [
        'title' => 'Mental Health Spotlight: 5 Samsara Employees Share Their Experience and Advice',
        'description' => 'A new study found that during the pandemic, the average American’s work week became 10% longer as the lines between work life and home life have increasingly blurred. This is contributing to increased burnout among employees. At Samsara, we recognize that it has never been more important to take care of your mental health. Recently, we hosted a panel on mental health, moderated by Lindsay Tomson, Senior Program Manager of Employee Experience. The frank discussion covered everything from burnout to self-care and more. Panelists included employees from all over Samsara:',
        'blog-category-id' => '16',
        'author' => 'Asma Stephan',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/7g7PlzTIbd7Tuv7wTuu3gY/d83a37ae78f7873986fec3e32138eaa3/profile.jpg',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/XOv7f9IlNxFOxrcjdPpzP/83961f78cdd0b328d1d58d08b00a4f28/Blog_Header_1880x600.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-10-6'
      ]);

      DB::table('blogs')->insert(
      [
        'title' => 'Celebrating the Global Technical Support Team at Samsara',
        'description' => 'At Samsara, our Global Technical Support team combines vast technical expertise with a passion for our customers. This team provides world-class support to over 20,000 Samsara customers – and they care deeply about delivering a great customer experience. They work tirelessly to resolve any issues our customers face and make sure to surface critical insights in order to improve our products. In honor of National Customer Service Week, which celebrates the people who serve and support customers, we’re excited to recognize the incredible people who make up our own Support team. Get to know the people behind the Samsara Technical Support team and learn more about their mission in the video below. Happy National Customer Service Week!',
        'blog-category-id' => '16',
        'author' => 'Molly Weber',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/3FJINs1Ew8iO6OHiL8V9lX/e84a64f018d04f414bd8c288189cff28/molly-weber.png',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/9tiekAOekiCmWcjAKRZRu/91914dec4fb46d6e7298461e4004d7b3/Team-Wave__anonymized_.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-10-4'
      ]);

      DB::table('blogs')->insert(
      [
        'title' => 'Employee Spotlight: How the Inside Sales Team Maintains their Connection While Working Remotely',
        'description' => 'Like so many others, we at Samsara have had to adjust how we work during the pandemic. We value the collaboration that comes from working alongside our teammates, so have found ways to stay connected and be there for each other. During this adjustment, we’ve remained highly productive (even being named the second-fastest growing company in the Americas according to Financial Times). We recently spoke to inside sales manager Setahrae Javanbakht, who became a manager at Samsara right before the pandemic started. She shares what she does to ensure our sales culture thrives, even while the team is working remotely.
        Q: Let’s start with some background: What do you do at Samsara?',
        'blog-category-id' => '16',
        'author' => 'Asma Stephan',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/7g7PlzTIbd7Tuv7wTuu3gY/d83a37ae78f7873986fec3e32138eaa3/profile.jpg',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/4BF10mk1rR51FTOj0ILt3D/55014a63efb9a7b41f251ae7a3fc5018/SPOTLIGHT_HEADER.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-09-23'
      ]);

      DB::table('blogs')->insert(
      [
        'title' => '3 Ways to Appreciate Drivers and Improve Their Experience',
        'description' => 'With a commercial driver labor market that is tighter than ever, it’s increasingly important for organizations to improve drivers’ day-to-day experience in order to retain them for the long term. According to a 2020 Commercial Carrier Journal report survey of 1,000 drivers, more than half cite a lack of respect and team culture as a top reason why fleets struggle to recruit and retain drivers. 50% of drivers also believe companies don’t get them home often enough and 23% feel their work doesn’t provide them enough loads.

        As National Driver Appreciation Week is upon us once again, it’s a good reminder to take the time to show your drivers how much you care. This September, we want to highlight 3 ways you can appreciate your drivers by improving their on-the-job experience:',
        'blog-category-id' => '5',
        'author' => 'Catherine Qin',
        'author-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/6ONmy2SxYXuneW8ooFQyxr/21d5787ab516634dda1b0c68cadff606/Catherine_Qin-Headshot.JPG.png',
        'display-image' => 'https://images.ctfassets.net/bx9krvy0u3sx/70a5QEtHoIfrVFcjZkTJZ1/1fa92d2a0931050f5f35f3456c7e54aa/driver_in_a_blue_truck-min.jpg?w=1600&fm=jpg&q=70',
        'created_at' => '2021-09-15'
      ]);

    }
}
