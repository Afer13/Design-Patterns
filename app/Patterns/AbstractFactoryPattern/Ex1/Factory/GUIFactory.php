<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1\Factory;

use App\Patterns\AbstractFactoryPattern\Ex1\Button;
use App\Patterns\AbstractFactoryPattern\Ex1\CheckBox;

interface GUIFactory{

    public function createButton(): Button;

    public function createCheckBox(): CheckBox;

}