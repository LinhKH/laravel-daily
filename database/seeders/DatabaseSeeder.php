<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create(['name' => 'Administrator']);
        \App\Models\Role::create(['name' => 'Editor']);
        \App\Models\Role::create(['name' => 'Author']);

        \App\Models\User::create([
            'role_id' => 1,
            'name' => 'administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        \App\Models\User::create([
            'role_id' => 1,
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ]);
        \App\Models\User::create([
            'role_id' => 2,
            'name' => 'editor',
            'email' => 'editor@editor.com',
            'password' => bcrypt('password')
        ]);
        \App\Models\User::create([
            'role_id' => 3,
            'name' => 'author',
            'email' => 'author@author.com',
            'password' => bcrypt('password')
        ]);

        for ($i=1; $i <=15 ; $i++) { 
            Post::create([
                'user_id' => rand(1,4),
                'title' => Str::random(10),
                'post_text' => Str::random(200)
            ]);
        }

    }
}
