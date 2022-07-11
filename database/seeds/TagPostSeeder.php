<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while($i<20){
            $isPresent = false;
            $rand_post = Post::inRandomOrder()->first();
            $rand_tagId = Tag::inRandomOrder()->first()->id;
            // Per evitare ripetizioni.
            foreach($rand_post->tags as $tags){
                if($tags->id === $rand_tagId) $isPresent = true;
            }
            if(!$isPresent){
                $rand_post->tags()->attach($rand_tagId);
                $i++;
            }
        }
    }
}
