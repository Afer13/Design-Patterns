<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1;

class WinCheckBox implements CheckBox{

    public function isCheck(): void
    {
        echo "-Windows CheckBox seçilidi<br>";
    }

    public function print(): void
    {
        echo "-Windows CheckBox <br>";
    }
}