<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;


use AbstractFactoryPatternInPhp\Models\Page;

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

    public function render(TemplateFactory $factory): void
    {
        $pageTemplate = $factory->getPageTemplate();
        $renderer = $factory->getRenderer();
        $renderer->render($pageTemplate->getTemplateAsString($this->page));
    }
}