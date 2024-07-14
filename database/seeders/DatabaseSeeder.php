<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Comment::factory(10)->create();

        // Comment::factory()->create([
        //      'name'=>'user 1',
        //     'content' =>'bình lựng 1',
        //     'title' =>'tiêu đề 1'
        // ]);

        // $this->call([
           
        //     RoleSeeder::class,
        //     CommentSeeder::class,


        // ]);
    }
}
