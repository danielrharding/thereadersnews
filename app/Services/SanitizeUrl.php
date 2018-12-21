<?php
/**
 * Created by PhpStorm.
 * User: danielharding
 * Date: 2018-12-21
 * Time: 18:06
 */

namespace App\Services;


class SanitizeUrl
{

    public static function slug($string, $space="-") {

        $string = utf8_encode($string);

        if (function_exists('iconv')) {
            $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        }

        $string = preg_replace("/[^a-zA-Z0-9 \-]/", "", $string);
        $string = trim(preg_replace("/\\s+/", " ", $string));
        $string = strtolower($string);
        $string = str_replace(" ", $space, $string);

        return $string;

    }

}