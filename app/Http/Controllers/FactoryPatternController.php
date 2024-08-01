<?php

namespace App\Http\Controllers;

use App\Patterns\FactoryPattern\Ex1\FacebookPoster;
use App\Patterns\FactoryPattern\Ex1\LinkedinPoster;
use App\Patterns\FactoryPattern\Ex1\SocialNetworkPoster;
use Illuminate\Http\Request;

class FactoryPatternController extends Controller
{
    function clientCode(SocialNetworkPoster $creator)
    {
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
    }

    public function testCode()
    {
        echo "Testing ConcreteCreator1:<br>";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "<br><br>";

        echo "Testing ConcreteCreator2:<br>";
        $this->clientCode(new LinkedinPoster("john_smith@example.com", "******"));
    }
}
