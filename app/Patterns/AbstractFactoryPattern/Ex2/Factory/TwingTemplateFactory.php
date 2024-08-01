<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2\Factory;

use App\Patterns\AbstractFactoryPattern\Ex2\IPageTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\ITemplateRenderer;
use App\Patterns\AbstractFactoryPattern\Ex2\ITitleTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\TwingPageTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\TwingRenderer;
use App\Patterns\AbstractFactoryPattern\Ex2\TwingTitleTemplate;

class TwingTemplateFactory implements ITemplateFactory{

    public function createTitleTemplate(): ITitleTemplate
    {
        return new TwingTitleTemplate();
    }

    public function createPageTemplate(): IPageTemplate
    {
        return new TwingPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): ITemplateRenderer
    {
        return new TwingRenderer();
    }

}