<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

use App\Patterns\AbstractFactoryPattern\Ex2\Factory\ITemplateFactory;

class Page
{

    private string $title;

    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function render(ITemplateFactory $templateFactory): string
    {
        $pageTemplate = $templateFactory->createPageTemplate();

        $renderer = $templateFactory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}
