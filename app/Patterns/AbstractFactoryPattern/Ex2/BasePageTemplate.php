<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

abstract class BasePageTemplate implements IPageTemplate
{

    protected ITitleTemplate $titleTemplate;

    public function __construct(ITitleTemplate $titleTemplate)
    {
        $this->titleTemplate=$titleTemplate;
    }

}