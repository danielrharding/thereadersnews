<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ArticleService;
use App\Models\ArticleModel;

class ArticleFeedCommand extends Command
{
    public $categories = [
        'uk', 'business', 'crypto', 'money', 'life+style', 'tech'
    ];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:article';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import articles by category.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        foreach ($this->categories as $category) {

            $articleService = new ArticleService();

            $articles = $articleService->getAllFeed($category);

            foreach ($articles->articles as $article) {

                $articleModel = new ArticleModel();

                if($article->content == null) {

                    continue;
                }

                $articleModel->title = $article->title;
                $articleModel->category = $category;
                $articleModel->content = $article->content;
                $articleModel->author = ( $article->author ) ? $article->author : '';
                $articleModel->url = $article->url;
                $articleModel->urlToImage = $article->urlToImage;
                $articleModel->publishedAt = $this->articleDate($article->publishedAt);

                $articleModel->save();
            }
        }
    }

    public function articleDate($articleDate) {

        $date = date_create($articleDate);

        return date_format($date,"Y-m-d");
    }
}
