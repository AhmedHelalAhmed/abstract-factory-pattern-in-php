<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

/**
 * Class PHPRenderer
 * @author Ahmed Helal Ahmed
 */
class PHPRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @return string
     */
    public function render(string $templateString): string
    {
        return 'Render In PHP: ' . $templateString;
    }
}