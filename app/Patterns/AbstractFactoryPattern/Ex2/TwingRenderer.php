<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

use TwigBridge\Facade\Twig;

class TwingRenderer implements ITemplateRenderer{

    public function render(string $templateString, array $arguments = []): string
    {
        return Twig::render($templateString, $arguments);
    }

}