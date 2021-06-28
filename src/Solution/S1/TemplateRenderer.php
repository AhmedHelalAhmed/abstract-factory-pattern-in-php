<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;

/**
 * Interface TemplateRenderer
 */
interface TemplateRenderer
{
    public function render(string $templateString): string;
}