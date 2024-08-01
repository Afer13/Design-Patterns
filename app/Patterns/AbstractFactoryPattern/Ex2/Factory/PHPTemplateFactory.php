<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2\Factory;

use App\Patterns\AbstractFactoryPattern\Ex2\IPageTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\ITemplateRenderer;
use App\Patterns\AbstractFactoryPattern\Ex2\ITitleTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\PHPPageTemplate;
use App\Patterns\AbstractFactoryPattern\Ex2\PHPRenderer;
use App\Patterns\AbstractFactoryPattern\Ex2\PHPTitleTemplate;

class PHPTemplateFactory implements ITemplateFactory{

    public function createTitleTemplate(): ITitleTemplate
    {
        return new PHPTitleTemplate();
    }

    public function createPageTemplate(): IPageTemplate
    {
        return new PHPPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): ITemplateRenderer
    {
        return new PHPRenderer();
    }

}