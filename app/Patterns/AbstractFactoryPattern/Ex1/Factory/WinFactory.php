<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1\Factory;

use App\Patterns\AbstractFactoryPattern\Ex1\Button;
use App\Patterns\AbstractFactoryPattern\Ex1\CheckBox;
use App\Patterns\AbstractFactoryPattern\Ex1\WinButton;
use App\Patterns\AbstractFactoryPattern\Ex1\WinCheckBox;

class WinFactory implements GUIFactory{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckBox(): CheckBox
    {
        return new WinCheckBox();
    }
    
}