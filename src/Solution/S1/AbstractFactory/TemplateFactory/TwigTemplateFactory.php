<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory;

use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\PageTemplate;
use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory;
use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

/**
 * Class TwigTemplateFactory
 * @package AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory
 * @author Ahmed Helal Ahmed
 */
class TwigTemplateFactory implements TemplateFactory
{
    /**
     * @return PageTemplate
     */
    public function getPageTemplate(): PageTemplate
    {
        return new PageTemplate\TwigPageTemplate();
    }

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer
    {
        return new TemplateRenderer\TwigRenderer();
    }
}