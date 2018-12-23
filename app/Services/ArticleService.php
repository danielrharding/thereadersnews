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
    public static function limitWords($words, $limit, $append = '')
    {
        // Add 1 to the specified limit becuase arrays start at 0
        $limit = $limit+1;
        // Store each individual word as an array element
        // Up to the limit
        $words = explode(' ', $words, $limit);
        // Shorten the array by 1 because that final element will be the sum of all the words after the limit
        array_pop($words);
        // Implode the array for output, and append an ellipse
        $words = implode(' ', $words) . $append;
        // Return the result
        return strip_tags($words);

    }

    public static function articleDate($articleDate)
    {
        $date = date_create($articleDate);

        return date_format($date,"M d, Y");

    }

    public function getAllFeed($name = null)
    {
        $ch = curl_init( "https://newsapi.org/v2/everything?q=$name&from=2018-12-23&sortBy=publishedAt&apiKey=8a78294929be47c4a66b84f4e99ad74c" );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

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