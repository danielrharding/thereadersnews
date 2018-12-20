<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = 'tags';

    public $timestamps = false;

    public function article()
    {
        return $this->belongsToMany('App\Article', 'articles', 'id', 'article_id');
    }
}
