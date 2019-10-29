<?php

namespace App;

use App\Post as PostEloquent;
use App\PostType as PostTypeEloquent;
use App\User as UserEloquent;
use Illuminate\Database\Eloquent\Model;


class PostType extends Model
{
    protected $table = 'post_types';

    //可讓使用者新增編輯的欄位名
    protected $fillable = [
        'name'
    ];

    //建立文章與文章類型間的關聯
    public function posts()
    {
        return $this->hasMany(PostEloquent::class, 'type');
    }
}
