<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'status' => TRUE,
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
            'description' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'status' => TRUE,
        ]);


        // ---------------  OR  --------------- //
        // create multiple with insert method
        Category::insert([
            [
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'description' => 'JavaScript is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions.',
                'status' => TRUE,
            ],
            [
                'name' => 'Python',
                'slug' => 'python',
                'description' => 'Python is an interpreted, high-level and general-purpose programming language.',
                'status' => TRUE,
            ],
            [
                'name' => 'Java',
                'slug' => 'java',
                'description' => 'Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible.',
                'status' => TRUE,
            ],
            [
                'name' => 'C++',
                'slug' => 'c++',
                'description' => 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".',
                'status' => TRUE,
            ]
        ]);

    }
}
