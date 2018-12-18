<?php
/**
 * Created by PhpStorm.
 * User: danielharding
 * Date: 2018-12-18
 * Time: 09:46
 */

namespace App\Services;

use Illuminate\Http\Request;

class ArticleService
{
    public function getTopUkHeadlinesFeed()
    {
        $ch = curl_init( "https://newsapi.org/v2/top-headlines?country=gb&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    public function getEventsFeed()
    {
        $ch = curl_init( "https://newsapi.org/v2/everything?q=events&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    public function getEditorialFeed()
    {
        $ch = curl_init( "https://newsapi.org/v2/everything?q=editorial&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    public function getLatestNewsFeed()
    {
        $ch = curl_init( "https://newsapi.org/v2/everything?q=latest-news&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    public function getWorldNewsFeed()
    {
        $ch = curl_init( "https://newsapi.org/v2/everything?q=the-world&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }
}