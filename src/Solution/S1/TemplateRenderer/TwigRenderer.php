<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\TemplateRenderer;

use AbstractFactoryPatternInPhp\Solution\S1\TemplateRenderer;

/**
 * Class TwigRenderer
 * @author Ahmed Helal Ahmed
 */
class TwigRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @return void
     */
    public function render(string $templateString): void
    {
        printSeparator('start twig');
        echo 'Render In Twig: ' . $templateString;
        printSeparator('end twig');
    }
}