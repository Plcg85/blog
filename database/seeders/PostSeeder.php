<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Titulo de prueba 1';
        $post->content = 'Contenido de prueba 1';
        $post->category = 'Contenido de categoria 1';
        $post->published_at = now();
        $post->save();

        $post = new Post();
        $post->title = 'Titulo de prueba 2';
        $post->content = 'Contenido de prueba 2';
        $post->category = 'Contenido de categoria 2';
        $post->published_at = now();
        $post->save();
    }
}
