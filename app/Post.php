<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;
use App\PostType as PostTypeEloquent;

class Post extends Model
{
    //可讓使用者新增編輯的欄位名
    protected $fillable = [
        'title', 'type', 'content', 'user_id',
    ];
    //建立文章與使用者的關聯
    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }
    //建立文章與文章類型間的關聯
    public function postType(){
        return $this->belongsTo(PostTypeEloquent::class, 'type');
    }
}
