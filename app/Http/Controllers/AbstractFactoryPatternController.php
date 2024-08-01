<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Patterns\AbstractFactoryPattern\Ex1\Application;
use App\Patterns\AbstractFactoryPattern\Ex1\Factory\GUIFactory;
use App\Patterns\AbstractFactoryPattern\Ex1\Factory\MacFactory;
use App\Patterns\AbstractFactoryPattern\Ex1\Factory\WinFactory;
use App\Patterns\AbstractFactoryPattern\Ex2\Factory\PHPTemplateFactory;
use App\Patterns\AbstractFactoryPattern\Ex2\Page;
use Exception;
use Illuminate\Http\Request;

class AbstractFactoryPatternController extends Controller
{
    public function getFactoryEx1($OS): GUIFactory
    {
        if ($OS === "WINDOWS") {
            return new WinFactory();
        } else if ($OS === "MAC") {
            return new MacFactory();
        } else {
            throw new Exception("Error! Unknown operating system.");
        }
    }

    public function testCodeEx1($OS)
    {
        $factory = $this->getFactoryEx1($OS);

        $applecation = new Application($factory);

        $button = $applecation->createButton();

        $checkBox = $applecation->createCheckBox();

        $button->onClick();

        $button->print();

        $checkBox->isCheck();

        $checkBox->print();
    }

    public function testCodeEx2()
    {
        $page = new Page('Sample page', 'This is the body.');

        echo "Testing actual rendering with the PHPTemplate factory:\n";
        echo $page->render(new PHPTemplateFactory());

        User::orderBy('id');
    }
}
