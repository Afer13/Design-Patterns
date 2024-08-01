<?php

namespace App\Patterns\AbstractFactoryPattern\Ex2;

class PHPTitleTemplate implements ITitleTemplate{

    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }

}