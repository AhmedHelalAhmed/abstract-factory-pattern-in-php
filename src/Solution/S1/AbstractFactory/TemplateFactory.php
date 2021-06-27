<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory;


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