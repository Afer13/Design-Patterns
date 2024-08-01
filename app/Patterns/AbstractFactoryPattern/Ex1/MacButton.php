<?php

namespace App\Patterns\AbstractFactoryPattern\Ex1;

class MacButton implements Button
{

    public function onClick(): void
    {
        echo "-Mac Buttona klik olundu!<br>";
    }

    function print(): void
    {
        echo "-Mac Button<br>";
    }
}
