<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

class TwingTitleTemplate implements ITitleTemplate{

    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }

}