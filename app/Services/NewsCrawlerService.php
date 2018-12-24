<?php
/**
 * Created by PhpStorm.
 * User: danielharding
 * Date: 2018-12-24
 * Time: 15:03
 */

namespace App\Services;

class NewsCrawlerService
{
    public function __construct()
    {
        $feeds = \Config::get('newsfeeds');
    }

    public function crawlNews()
    {
        $crawler = \Goutte::request('GET', 'URL');

        $text = $crawler->filter('body')->each(function ($node) {

            return (string) $node->text();

        });
    }

    public function getNewsFeed()
    {

    }
}