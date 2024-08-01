<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2\Factory;

use App\Patterns\AbstractFactoryPattern\Ex2\IPageTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\ITemplateRenderer;
use App\Patterns\AbstractFactoryPattern\Ex2\ITitleTemplate;

interface ITemplateFactory
{

    public function createTitleTemplate(): ITitleTemplate;

    public function createPageTemplate(): IPageTemplate;

    public function getRenderer(): ITemplateRenderer;
}
