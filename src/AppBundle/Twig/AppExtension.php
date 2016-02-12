<?php

namespace AppBundle\Twig;

use AppBundle\Utils\Markdown;

class AppExtension extends \Twig_Extension
{
    /**
     * @var Markdown
     */
    private $parser;

    public function __construct(Markdown $parser)
    {
        $this->parser = $parser;
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('md2html', array($this, 'markdownToHtml'), array('is_safe' => array('html'))),
        );
    }

    /**
     * İçeriği html e çevirir
     *
     *  @param string $content
     *
     * @return string
     */
    public function markdownToHtml($content)
    {
        return $this->parser->toHtml($content);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // the name of the Twig extension must be unique in the application. Consider
        // using 'app.extension' if you only have one Twig extension in your application.
        return 'app.extension';
    }
}