<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1;

use App\Patterns\AbstractFactoryPattern\Ex1\Factory\GUIFactory;

class Application
{
    private GUIFactory $factory;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createButton(): Button
    {
        return $this->factory->createButton();
    }

    public function createCheckBox(): CheckBox
    {
        return $this->factory->createCheckBox();
    }
}
