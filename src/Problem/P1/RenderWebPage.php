<?php


namespace AbstractFactoryPatternInPhp\Problem\P1;

use AbstractFactoryPatternInPhp\Models\Page;
use AbstractFactoryPatternInPhp\Problem\P1\Enums\RendererEnum;
use Exception;

/**
 * Class RenderWebPage
 * @package AbstractFactoryPatternInPhp\Problem\P1\
 * @author Ahmed Helal Ahmed
 */
class RenderWebPage
{
    /**
     * @var Page
     */
    private $page;

    /**
     * RenderWebPage constructor.
     * @param Page $page
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * @param $type
     * @return void|Exception
     */
    public function render($type)
    {
        $type = strtolower($type);

        if ($type === RendererEnum::TWIG) {
            return $this->renderInTwig();
        } elseif ($type === RendererEnum::PHP) {
            return $this->renderInPHP();
        }

        return new Exception('Type not supported yet');
    }

    /**
     * @return void
     */
    private function renderInTwig(): void
    {
        printSeparator('start twig');
        echo 'Render In Twig: ' . $this->getPageInTwig();
        printSeparator('end twig');
    }

    /**
     * @return string
     */
    private function getPageInTwig(): string
    {
        $title = $this->page->getTitle();
        $content = $this->page->getContent();
        return htmlentities("<div class='page'><h1>{{ $title }}</h1><article class='content'>{{ $content }}</article></div>");
    }

    /**
     * @return void
     */
    private function renderInPHP(): void
    {
        printSeparator('start php');
        echo 'Render In PHP: ' . $this->getPageInPHP();
        printSeparator('end php');

    }

    /**
     * @return string
     */
    private function getPageInPHP(): string
    {
        $title = $this->page->getTitle();
        $content = $this->page->getContent();
        return htmlentities("<div class='page'><h1><?= $title ?></h1><article class='content'><?= $content ?></article></div>");
    }
}