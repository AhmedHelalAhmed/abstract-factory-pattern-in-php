<?php

namespace AbstractFactoryPatternInPhp\Solution\S1;

use AbstractFactoryPatternInPhp\Models\Page;

/**
 * Interface PageTemplate
 */
interface PageTemplate
{
    public function getTemplateAsString(Page $page): string;
}