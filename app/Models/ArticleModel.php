<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\SanitizeUrl;
use App\Services\ArticleService;

class ArticleModel extends Model
{
    protected $table = "articles";

    public $timestamps = false;

    public function getFriendlyLink()
    {
        return SanitizeUrl::slug($this->title);
    }

    public function shortContent($limit, $append = '')
    {
        return ArticleService::limitWords($this->content, $limit, $append);
    }

}
