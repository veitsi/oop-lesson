<?php

class Car
{
    var $wheels=4;
    var $color="black";
    public function go()
    {
        echo "here we go";
    }
}

$quattro = new Car();
$quattro->go();
