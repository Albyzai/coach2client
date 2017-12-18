<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tag = new Tag();
        $tag->keyword = 'Crossfit';
        $tag->save();
        
        $tag1 = new Tag();
        $tag1->keyword = 'HIIT';
        $tag1->save();
        
        $tag2 = new Tag();
        $tag2->keyword = 'Vægttab';
        $tag2->save();
        
        $tag3 = new Tag();
        $tag3->keyword = 'Bodybuilding';
        $tag3->save();
        
        $tag4 = new Tag();
        $tag4->keyword = 'Fleksibilitet';
        $tag4->save();
        
        $tag5 = new Tag();
        $tag5->keyword = 'Yoga';
        $tag5->save();
        
        $tag6 = new Tag();
        $tag6->keyword = 'Muskelopbygning';
        $tag6->save();
        
        $tag7 = new Tag();
        $tag7->keyword = 'Sportstræning';
        $tag7->save();
        
        
    }
}
