<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $table = "articles";

    public $timestamps = false;

    public function getFriendlyLink()
    {
        return str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($this->title)))));
    }
}
