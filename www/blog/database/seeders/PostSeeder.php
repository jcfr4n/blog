<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Post Prueba';
        $post->content = 'Contenido de prueba';
        $post->category = 'Prueba';
        $post->is_active = true;
        $post->save();

    }
}
