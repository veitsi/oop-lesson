<?php

class Car
{
    var $wheels = 4;
    var $color = "black";
    var $oil = 20;

    public function go()
    {
        if ($this->checkup())
        echo "we have $this->wheels, our color is $this->color and we go";
    }

    public function checkup()
    {
        if ($this->oil > 10)
            return true;
        else
            return false;
    }
}

$quattro = new Car();
$quattro->go();