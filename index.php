<?php

require_once __DIR__ . '/vendor/autoload.php';

use AbstractFactoryPatternInPhp\Models\Page;
use AbstractFactoryPatternInPhp\Solution\S1\TemplateFactory\PHPTemplateFactory;
use AbstractFactoryPatternInPhp\Solution\S1\TemplateFactory\TwigTemplateFactory;

$page = new Page();
$page->setContent('this is content');
$page->setTitle('this is title');


printSeparator('start normal');
$renderWebPage = new \AbstractFactoryPatternInPhp\Problem\P1\RenderWebPage($page);
$renderWebPage->render('php');
$renderWebPage->render('twig');
printSeparator('end normal');


printSpaces();
printSpaces();
printSpaces();


printSeparator('start abstract factory');
$renderWebPage = new \AbstractFactoryPatternInPhp\Solution\S1\RenderWebPage($page);
$renderWebPage->render(new PHPTemplateFactory());
$renderWebPage->render(new TwigTemplateFactory());
printSeparator('end abstract factory');


