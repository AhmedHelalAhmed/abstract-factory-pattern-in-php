<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;


use AbstractFactoryPatternInPhp\Problem\P1\Page;

/**
 * Class RenderWebPage
 * @author Ahmed Helal Ahmed
 */
class RenderWebPage
{
    /**
     * @var Page
     */
    private $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->getPageTemplate();
        $renderer = $factory->getRenderer();
        return $renderer->render($pageTemplate->getTemplateAsString($this->page));
    }
}