<?php

require_once __DIR__ . '/vendor/autoload.php';

use AbstractFactoryPatternInPhp\Problem\P1\Normal\Page;
use AbstractFactoryPatternInPhp\Problem\P1\Normal\RenderWebPage;

$page = new Page();
$page->setContent('this is content');
$page->setTitle('this is title');


//  ===============================> normal

$renderWebPage = new RenderWebPage($page);
echo $renderWebPage->render('php');
echo $renderWebPage->render('twig');

//  ===============================> normal



//  ===============================> abstract factory




//  ===============================> abstract factory
