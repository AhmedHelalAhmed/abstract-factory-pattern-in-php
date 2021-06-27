<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

use AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory\TemplateRenderer;

/**
 * Class TwigRenderer
 * @author Ahmed Helal Ahmed
 */
class TwigRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @return string
     */
    public function render(string $templateString): string
    {
        return 'Render In Twig: ' . $templateString;
    }
}