<?php

use App\User as UserEloquent;
use App\Post as PostEloquent;
use App\PostType as PostTypeEloquent;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //透過factory產生4筆user模型
        $users = factory(UserEloquent::class, 4)->create();

        //透過factory產生10筆postype模型
        $postTypes = factory(PostTypeEloquent::class, 10)->create();

        //透過factory產生50筆post模型，用each方法一個一個處理，並用use代入$postType資料
        $posts = factory(PostEloquent::class, 50)->create()
            ->each(function ($post) use ($postTypes) {
                $post->type = $postTypes[mt_rand(0, (count($postTypes)
                    - 1))]->id;
                $post->save();
            });

    }
}
