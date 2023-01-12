<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Laravel',
            'slug' => 'laravel',
            'content' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'status' => TRUE,
        ]);

        Category::create([
            'title' => 'PHP',
            'slug' => 'php',
            'content' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'status' => TRUE,
        ]);


        // ---------------  OR  --------------- //
        // create multiple with insert method
        // But with Insert uuid (id) cannot generate on its own so manually assigning id value
        Category::insert([
            [
                'id' => Str::uuid(),
                'title' => 'JavaScript',
                'slug' => 'javascript',
                'content' => 'JavaScript is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions.',
                'status' => TRUE,
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Python',
                'slug' => 'python',
                'content' => 'Python is an interpreted, high-level and general-purpose programming language.',
                'status' => TRUE,
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Java',
                'slug' => 'java',
                'content' => 'Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible.',
                'status' => TRUE,
            ],
            [
                'id' => Str::uuid(),
                'title' => 'C++',
                'slug' => 'c++',
                'content' => 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".',
                'status' => TRUE,
            ]
        ]);

    }
}
