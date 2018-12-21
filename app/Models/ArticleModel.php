<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\SanitizeUrl;

class ArticleModel extends Model
{
    protected $table = "articles";

    public $timestamps = false;

    public function getFriendlyLink()
    {
        return SanitizeUrl::slug($this->title);
    }
}
