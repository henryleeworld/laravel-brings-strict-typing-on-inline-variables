<?php

namespace App\Http\Controllers;

use Strictus\Strictus;

class CalculatorController extends Controller
{
    public function show() 
    {
        //creates a string
        // $name = Strictus::string('蘇萊塔・墨丘利');
        //creates a nullable string
        //$comment = Strictus::nullableString(null);
        //creates an int
        $score = Strictus::int($original = 100);
        $score($score() - ($subtraction = 20));
        echo '數字 ' . $original . ' 減 ' . $subtraction . ' 是 ' . $score() . PHP_EOL;
        //creates a boolean
        //$isActive = Strictus::boolean(true);
        //creates an array
        //$authors = Strictus::array(['米奧琳涅・連布蘭', '古爾・杰特克']);
        //creates an object
        //$person = Strictus::object((object) ['name' => '伊蘭・凱萊斯', 'affiliation' => '佩爾宿舍']);
        //instantiates a class
        //$calculator = Strictus::instance(CalculatorClass::class, new CalculatorClass());
    }
}
