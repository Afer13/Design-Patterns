<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1;

class MacCheckBox implements CheckBox{

    public function isCheck(): void
    {
        echo "-Mac CheckBox seçilidi<br>";
    }

    public function print(): void
    {
        echo "-Mac CheckBox <br>";
    }
}