<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;


/**
 * Interface TemplateFactory
 */
interface TemplateFactory
{
    /**
     * @return PageTemplate
     */
    public function getPageTemplate(): PageTemplate;

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer;
}