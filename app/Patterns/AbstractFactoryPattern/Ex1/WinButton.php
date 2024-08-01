<?php
namespace App\Patterns\AbstractFactoryPattern\Ex1;

class WinButton implements Button{

    public function onClick(): void
    {
        echo "-Windows Buttona klik olundu!<br>";
    }

    public function print(): void
    {
        echo "-Windows Button<br>";
    }

}