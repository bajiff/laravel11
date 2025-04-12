<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Post::create([
        //     'title' => fake()->sentence(),
        //     'slug' => Str::slug(fake()->slug()),
        //     'author_id' => fn() => User::factory(),
        //     'category_id' => fn() => Category::factory(),
        //     'body' => fake()->paragraph(500)
        // ]);

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => fake()->sentence(rand(1,2), false),
        //     'slug' => Str::slug(fake()->sentence(rand(1,2),false))
        // ]);

        // $this->call([
        //     Post::class,
        //     User::class,
        //     Category::class,
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        Post::factory(50)->recycle([
            Category::all(),
            User::all(),
        ])->create();




    }
}
