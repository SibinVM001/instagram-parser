<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;
use App\Helpers\Puppeteer;

class HomeController extends Controller
{
    public function scrapeImages()
    {
        // $url = "https://www.instagram.com/p/CvXk8q7pzKR/";
        $url = "https://www.instagram.com/reel/C3XWPKZP_7H/?igsh=MTU4Yndnb29wbzVnZA==";
        $imageUrl = Puppeteer::scrapeInstagramImage($url);

        return view('welcome', compact('imageUrl'));
    }
}
