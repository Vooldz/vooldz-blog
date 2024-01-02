<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\TextWidget;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create The Admin
        if (User::find(1)) {
            $user = User::find(1);
            if ($user->name != 'Vooldz') {
                User::factory()->create([
                    'name' => 'Vooldz',
                    'email' => 'vooldz@gmail.com',
                    'password' => '12345678',
                ]);
            }
        } else {
            {
                User::factory()->create([
                    'name' => 'Vooldz',
                    'email' => 'vooldz@gmail.com',
                    'password' => '12345678',
                ]);
            }
        }

        // Create Posts
        $this->call(PostSeeder::class);

        // Create Categories
        $categories = ['Life', 'Cars', 'Food', 'Books', 'Winter', 'Coffee', 'Technology', 'Web Development', 'New', 'Trendy', 'War', 'Geography', 'Gym', 'Health'];
        for ($i = 0; $i < count($categories); $i++) {
            $title = $categories[$i];
            Category::create([
                'title' => $title,
                'slug' => Str::slug($title),
            ]);
        }

        // Create The Relation Between the Post and The Category
        for ($i = 0; $i < 40; $i++) {
            CategoryPost::create([
                'category_id' => fake()->numberBetween(1, 14),
                'post_id' => fake()->numberBetween(1, 30),
            ]);
        }

        TextWidget::create([
            'key' => 'blog-title',
            'title' => 'V O O L D Z Blog',
            'content' => 'Welcome To Ayman Blog',
            'active' => '1',
        ]);

        TextWidget::create([
            'key' => 'about-us-sidebar',
            'title' => 'Expert Back-End Development',
            'content' => "Welcome to our team! We are a group of dedicated professionals specializing in back-end development. Our expertise lies in creating robust,
            scalable, and efficient applications using cutting-edge technologies.",
            'active' => '1',
        ]);

        TextWidget::create([
            'key' => 'about-page',
            'title' => 'Expert Back-End Development',
            'content' => "Welcome to our team! We are a group of dedicated professionals specializing in back-end development. Our expertise lies in creating robust, scalable, and efficient applications using cutting-edge technologies.

            We are proficient in PHP, Laravel, Tailwind, HTML5, MySQL, and CSS. These tools allow us to build secure, high-performance web applications that meet your business needs.

            Our team is committed to delivering top-notch services, ensuring that every project we undertake is completed to the highest standards. We believe in continuous learning and improvement, always staying updated with the latest trends and advancements in technology.

            We understand that every client has unique requirements, and we strive to provide solutions that align perfectly with your vision. Whether you need a small website or a large-scale enterprise application, we have the skills and experience to handle it.

            Join us on this journey of innovation and growth. Let's create something amazing together!",
            'image' => fake()->imageUrl(),
            'active' => '1',
        ]);

        // \App\Models\User::factory(10)->create();

    }
}
