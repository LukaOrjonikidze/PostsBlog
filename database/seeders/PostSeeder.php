<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => "Hello" ,
            'body' => "Print(Hello World)" ,
            'author' => "Munanyo" ,
            'active' => 0
        ]);
        Post::create([
            'title' => "Grapinia" ,
            'body' => "Mkvdaria" ,
            'author' => "Ana" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Dark Knight" ,
            'body' => "Magic Trick!" ,
            'author' => "BatVid" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "American Psycho" ,
            'body' => "Hey Paul!" ,
            'author' => "Sigmvid" ,
            'active' => 0
        ]);
        Post::create([
            'title' => "Amplier" ,
            'body' => "Meomari" ,
            'author' => "Lekso" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Stand" ,
            'body' => "OH MY GOD!" ,
            'author' => "Joseph Joestar" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Papi" ,
            'body' => "Paps nu atyueb..." ,
            'author' => "Misi Megobari" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "Shualeduri" ,
            'body' => "Gamarjoba , Shualeduri Chagitardebat dges internetis ugareshod" ,
            'author' => "Admini kacia" ,
            'active' => 1
        ]);
        Post::create([
            'title' => "25 Hours" ,
            'body' => "Woof, Woof" ,
            'author' => "Man With Pitbul" ,
            'active' => 0
        ]);
        Post::create([
            'title' => "LightHouse" ,
            'body' => "Me Lobster" ,
            'author' => "DaviD" ,
            'active' => 0
        ]);
    }
}
