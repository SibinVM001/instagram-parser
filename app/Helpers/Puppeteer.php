<?php

namespace App\Helpers;

use Symfony\Component\Process\Process;

class Puppeteer
{
    public static function scrapeInstagramImage($postUrl)
    {
        $script = base_path('resources/js/scrapeInstagramImage.js');
        $process = new Process(["node", $script, $postUrl]);
        $process->run();

        if (!$process->isSuccessful()) {
            return null;
        }

        $result = $process->getOutput();
        return trim($result);
    }
}
