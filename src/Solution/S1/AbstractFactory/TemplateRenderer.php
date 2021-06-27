<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory;

/**
 * Interface TemplateRenderer
 */
interface TemplateRenderer
{
    public function render(string $templateString): string;
}