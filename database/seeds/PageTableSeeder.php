<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class PagetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page1 = new Page();
        $page1->title = 'Handelsbetingelser';
        $page1->route = 'handlesbetingelser';
        $page1->content = 'Handelsbetingelser';
        $page1->save();
        
        $page2 = new Page();
        $page2->title = 'Om';
        $page2->route = 'om';
        $page2->content = 'Om';
        $page2->save();
        
        $page3 = new Page();
        $page3->title = 'Support';
        $page3->route = 'support';
        $page3->content = 'Support';
        $page3->save();
        
        
        $page4 = new Page();
        $page4->title = 'page1';
        $page4->route = 'page1';
        $page4->content = 'page1';
        $page4->save();
        
        $page5 = new Page();
        $page5->title = 'page2';
        $page5->route = 'page2';
        $page5->content = 'page2';
        $page5->save();
        
        $page6 = new Page();
        $page6->title = 'page3';
        $page6->route = 'page3';
        $page6->content = 'page3';
        $page6->save();
    }
}
