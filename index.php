<?php

require_once __DIR__ . '/vendor/autoload.php';

use AbstractFactoryPatternInPhp\Solution\S1\TemplateFactory\PHPTemplateFactory;
use AbstractFactoryPatternInPhp\Solution\S1\TemplateFactory\TwigTemplateFactory;
use AbstractFactoryPatternInPhp\Problem\P1\Page;

$page = new Page();
$page->setContent('this is content');
$page->setTitle('this is title');


printSeparator('start normal');
$renderWebPage = new \AbstractFactoryPatternInPhp\Problem\P1\RenderWebPage($page);
printSeparator('start php');

echo $renderWebPage->render('php');
printSeparator('end php');
printSeparator('start twig');

echo $renderWebPage->render('twig');
printSeparator('end twig');
printSeparator('end normal');


printSpaces();
printSpaces();
printSpaces();


printSeparator('start abstract factory');
$renderWebPage = new \AbstractFactoryPatternInPhp\Solution\S1\RenderWebPage($page);
$factoryInPHP = new PHPTemplateFactory();
printSeparator('start php');
echo $renderWebPage->render($factoryInPHP);
printSeparator('end php');

$factoryInTwig = new TwigTemplateFactory();
printSeparator('start twig');
echo $renderWebPage->render($factoryInTwig);
printSeparator('end twig');
printSeparator('end abstract factory');


