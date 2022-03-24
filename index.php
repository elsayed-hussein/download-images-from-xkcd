<?php

require './vendor/autoload.php';

use DiDom\Document;
use Toolkit\Cli\Color;

$start = readline(Color::apply('cyan1', "Please enter the starting id::\n"));

$end = readline(Color::apply('brown1', "Please enter the ending id::\n"));

for ($i = $start; $i <= $end; $i++) {
    $document = new Document("https://xkcd.com/{$i}/", true);
    $src = $document->find('#comic')[0]->children()[1]->src;
    $file_name = $document->first('head')->first('title')->text();
    $file_name = str_replace("xkcd: ", "", $file_name);
    $file_name = explode(" ", $file_name);
    $file_name = join('-', $file_name);
    // print_r($file_name);
    file_put_contents("./downloads/{$file_name}.jpg", file_get_contents("https:{$src}"));
    print(Color::apply('green', "🔥🔥 Downloaded {$file_name}\n"));
}

//[ ] : convert the above code to work on a website (read the user input using a form).
//[ ] : then allow the user to view the downloaded images in a webpage called `images.php`.
//[ ] : add `.copy` to file name if exists .