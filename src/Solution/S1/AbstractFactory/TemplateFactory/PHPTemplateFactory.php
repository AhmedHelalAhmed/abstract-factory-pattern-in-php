<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory;

use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\PageTemplate;
use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory;
use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

/**
 * Class PHPTemplateFactory
 * @package AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateFactory
 * @author Ahmed Helal Ahmed
 */
class PHPTemplateFactory implements TemplateFactory
{
    /**
     * @return PageTemplate
     */
    public function getPageTemplate(): PageTemplate
    {
        return new PageTemplate\PHPPageTemplate();
    }

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer
    {
        return new TemplateRenderer\PHPRenderer();
    }
}