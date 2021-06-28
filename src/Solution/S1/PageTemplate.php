<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;

use AbstractFactoryPatternInPhp\Problem\P1\Page;

/**
 * Interface PageTemplate
 */
interface PageTemplate
{
    public function getTemplateAsString(Page $page): string;
}