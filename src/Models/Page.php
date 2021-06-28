<?php

namespace AbstractFactoryPatternInPhp\Models;

/**
 * Page data
 *
 * Class Page
 * @author Ahmed Helal Ahmed
 */
class Page
{
    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $content = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Page
     */
    public function setTitle(string $title): Page
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Page
     */
    public function setContent(string $content): Page
    {
        $this->content = $content;
        return $this;
    }
}