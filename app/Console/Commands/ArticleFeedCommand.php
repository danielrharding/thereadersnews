<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ArticleService;
use App\Models\ArticleModel;

class ArticleFeedCommand extends Command
{
    public $categories = [
        'uk',
        'gb',
        'business',
        'crypto',
        'money',
        'life+style',
        'tech',
        'editorial',
        'event',
        'latest',
        'world',
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

                if(ArticleModel::where('url', '=', $article->url)->count() > 0) {
                    continue;
                }

                $articleModel = new ArticleModel();

                if($article->content == null) {

                    continue;
                }

                $articleModel->title = $article->title;
                $articleModel->category = ( isset($category) ) ? $category : "";
                $articleModel->content = $this->getSource($article->content, $article->source->name, $article->url);
                $articleModel->category = $category;
                $articleModel->source = $article->source->name;
                $articleModel->author = ( $article->author ) ? $article->author : '';
                $articleModel->url = $article->url;
                $articleModel->urlToImage = ( isset($article->urlToImage) ) ? $article->urlToImage : '';
                $articleModel->publishedAt = $this->articleDate($article->publishedAt);

                $articleModel->save();
            }
        }
    }

    public function articleDate($articleDate) {

        $date = date_create($articleDate);

        return date_format($date,"Y-m-d");
    }

    public function getSource($content, $source, $url)
    {
        $data = [
            'Charlotteobserver.com' => '.dateline-storybody',
            'Independent.ie' => '#js-article-text',
            'Daily Mail' => '#js-article-text',
            'Stuff.co.nz' => '.sics-component__story',
            'Skift.com' => '.post-copy',
            'Thehollywoodgossip.com' => '.body',
            'Indiewire.com' => '.entry-content',
//            'Seekingalpha.com' => '.body',
//            'The Hindu' => '.body',
//            'Nj.com' => '.body',
//            'Charlotteobserver.com' => '.body',
//            'Pointswithacrew.com' => '.body',
//            'Indianexpress.com' => '.body',
//            '' => '.body',
//            '' => '.body',
//            '' => '.body',
//            '' => '.body',
        ];

        if(isset($data[$source])) {
            var_dump($source, isset($data[$source]), $url);

            $crawler = \Goutte::request('GET', $url);

            $text = $crawler->filter($data[$source])->each(function ($node) {

                return preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", (string) $node->text());

            });

            return "<p>" . implode('</p><p>', $text) . "</p>";
        } else {
            return $content;
        }
    }

}
