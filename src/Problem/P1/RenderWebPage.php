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
     * @return Exception|string
     */
    public function render($type): string
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
     * @return string
     */
    private function getPageInTwig(): string
    {
        $title = $this->page->getTitle();
        $content = $this->page->getContent();
        return htmlentities("<div class='page'><h1>{{ $title }}</h1><article class='content'>{{ $content }}</article></div>");
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

    /**
     * @return string
     */
    private function renderInPHP(): string
    {
        return 'Render In PHP: '.$this->getPageInPHP();
    }

    /**
     * @return string
     */
    private function renderInTwig(): string
    {
        return 'Render In Twig: '.$this->getPageInTwig();
    }
}