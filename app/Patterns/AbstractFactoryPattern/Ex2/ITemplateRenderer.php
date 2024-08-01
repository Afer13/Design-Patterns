<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

interface ITemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
