<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $post = new Post();
        $post->title = 'Ny undersøgelse viser at kreatin er THE SHIT';
        $post->user_id = 3;
        $post->body ='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tortor magna, cursus eu quam sed, convallis mattis ligula. Vestibulum nunc odio, ultricies ut elementum a, tincidunt et lacus. Ut non metus sem. Mauris lacus dolor, lobortis ac arcu ut, facilisis accumsan neque. Sed maximus tristique nisi. Phasellus interdum ante sit amet fringilla venenatis. Praesent vitae vehicula quam, non lobortis ligula. Cras ac lacus blandit, luctus nisi a, porttitor libero. Nam id consectetur nulla, quis faucibus augue. Mauris tincidunt ex et euismod auctor. Praesent placerat eros tortor, sit amet pretium velit vestibulum sed. Nullam et neque eu neque sodales placerat ac sit amet dui. Donec et ante eget nunc laoreet accumsan non rhoncus nisi. Aenean vulputate felis quis laoreet cursus. In hac habitasse platea dictumst. Curabitur eleifend varius urna et varius. Vestibulum interdum sollicitudin felis, eu viverra enim dignissim eu. Sed non posuere ipsum. Donec luctus molestie viverra. Vestibulum gravida interdum enim, eu rhoncus nisl scelerisque id. Maecenas eu molestie risus, et fermentum lacus. Quisque id odio posuere, ullamcorper neque et, dictum augue. Donec efficitur ornare tortor, sit amet pulvinar massa rutrum a. Mauris sit amet lectus non diam bibendum egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse vel diam posuere, blandit mauris quis, porttitor velit. Donec aliquam lectus metus, et euismod est tempus sit amet. Curabitur scelerisque, risus et suscipit gravida, dui massa gravida lectus, et viverra nisi massa at lectus. Integer vitae odio sem. In hac habitasse platea dictumst. Duis eleifend risus non turpis bibendum facilisis. Sed tristique feugiat fringilla. Fusce a dignissim diam.';
        $post->save();
        
        $post1 = new Post();
        $post1->title = 'BREAKING: Proteinpulver kræftfremkaldende';
        $post1->user_id = 3;
        $post1->body ='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tortor magna, cursus eu quam sed, convallis mattis ligula. Vestibulum nunc odio, ultricies ut elementum a, tincidunt et lacus. Ut non metus sem. Mauris lacus dolor, lobortis ac arcu ut, facilisis accumsan neque. Sed maximus tristique nisi. Phasellus interdum ante sit amet fringilla venenatis. Praesent vitae vehicula quam, non lobortis ligula. Cras ac lacus blandit, luctus nisi a, porttitor libero. Nam id consectetur nulla, quis faucibus augue. Mauris tincidunt ex et euismod auctor. Praesent placerat eros tortor, sit amet pretium velit vestibulum sed. Nullam et neque eu neque sodales placerat ac sit amet dui. Donec et ante eget nunc laoreet accumsan non rhoncus nisi. Aenean vulputate felis quis laoreet cursus. In hac habitasse platea dictumst. Curabitur eleifend varius urna et varius. Vestibulum interdum sollicitudin felis, eu viverra enim dignissim eu. Sed non posuere ipsum. Donec luctus molestie viverra. Vestibulum gravida interdum enim, eu rhoncus nisl scelerisque id. Maecenas eu molestie risus, et fermentum lacus. Quisque id odio posuere, ullamcorper neque et, dictum augue. Donec efficitur ornare tortor, sit amet pulvinar massa rutrum a. Mauris sit amet lectus non diam bibendum egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse vel diam posuere, blandit mauris quis, porttitor velit. Donec aliquam lectus metus, et euismod est tempus sit amet. Curabitur scelerisque, risus et suscipit gravida, dui massa gravida lectus, et viverra nisi massa at lectus. Integer vitae odio sem. In hac habitasse platea dictumst. Duis eleifend risus non turpis bibendum facilisis. Sed tristique feugiat fringilla. Fusce a dignissim diam.';
        $post1->save();
        
        
        $post2 = new Post();
        $post2->title = 'HIT Hvis du vil tabe dig!';
        $post2->user_id = 2;
        $post2->body ='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tortor magna, cursus eu quam sed, convallis mattis ligula. Vestibulum nunc odio, ultricies ut elementum a, tincidunt et lacus. Ut non metus sem. Mauris lacus dolor, lobortis ac arcu ut, facilisis accumsan neque. Sed maximus tristique nisi. Phasellus interdum ante sit amet fringilla venenatis. Praesent vitae vehicula quam, non lobortis ligula. Cras ac lacus blandit, luctus nisi a, porttitor libero. Nam id consectetur nulla, quis faucibus augue. Mauris tincidunt ex et euismod auctor. Praesent placerat eros tortor, sit amet pretium velit vestibulum sed. Nullam et neque eu neque sodales placerat ac sit amet dui. Donec et ante eget nunc laoreet accumsan non rhoncus nisi. Aenean vulputate felis quis laoreet cursus. In hac habitasse platea dictumst. Curabitur eleifend varius urna et varius. Vestibulum interdum sollicitudin felis, eu viverra enim dignissim eu. Sed non posuere ipsum. Donec luctus molestie viverra. Vestibulum gravida interdum enim, eu rhoncus nisl scelerisque id. Maecenas eu molestie risus, et fermentum lacus. Quisque id odio posuere, ullamcorper neque et, dictum augue. Donec efficitur ornare tortor, sit amet pulvinar massa rutrum a. Mauris sit amet lectus non diam bibendum egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse vel diam posuere, blandit mauris quis, porttitor velit. Donec aliquam lectus metus, et euismod est tempus sit amet. Curabitur scelerisque, risus et suscipit gravida, dui massa gravida lectus, et viverra nisi massa at lectus. Integer vitae odio sem. In hac habitasse platea dictumst. Duis eleifend risus non turpis bibendum facilisis. Sed tristique feugiat fringilla. Fusce a dignissim diam.';
        $post2->save();
        

    }
}
