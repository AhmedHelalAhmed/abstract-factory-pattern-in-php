<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\TemplateRenderer;

use AbstractFactoryPatternInPhp\Solution\S1\TemplateRenderer;

/**
 * Class PHPRenderer
 * @author Ahmed Helal Ahmed
 */
class PHPRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @return void
     */
    public function render(string $templateString): void
    {
        printSeparator('start php');
        echo 'Render In PHP: ' . $templateString;
        printSeparator('end php');

    }
}