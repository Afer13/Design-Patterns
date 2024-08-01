<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1\Factory;

use App\Patterns\AbstractFactoryPattern\Ex1\Button;
use App\Patterns\AbstractFactoryPattern\Ex1\CheckBox;
use App\Patterns\AbstractFactoryPattern\Ex1\MacButton;
use App\Patterns\AbstractFactoryPattern\Ex1\MacCheckBox;

class MacFactory implements GUIFactory{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckBox(): CheckBox
    {
        return new MacCheckBox();
    }
}