<?php

namespace AbstractFactoryPatternInPhp\Solution\S1\AbstractFactory;

use AbstractFactoryPatternInPhp\Problem\P1\Normal\Page;
use AbstractFactoryPatternInPhp\Solution\S1;

/**
 * Interface PageTemplate
 */
interface PageTemplate
{
    public function getTemplateAsString(Page $page): string;
}