<?php


namespace AbstractFactoryPatternInPhp\Solution\S1\PageTemplate;

use AbstractFactoryPatternInPhp\Solution\S1\PageTemplate;
use AbstractFactoryPatternInPhp\Problem\P1\Page;

/**
 * Class TwigPageTemplate
 * @author Ahmed Helal Ahmed
 *//**/

class TwigPageTemplate implements PageTemplate
{
    /**
     * @param Page $page
     * @return string
     */
    public function getTemplateAsString(Page $page): string
    {
        $title = $page->getTitle();
        $content = $page->getContent();
        return htmlentities("<div class='page'><h1>{{ $title }}</h1><article class='content'>{{ $content }}</article></div>");
    }
}