<?php

class Car
{
    var $color = "black";
    private $oil = 20;

    public function go()
    {
        echo "our color is $this->color and we go";
    }

    public function prepare()
    {
        $this->add_oil();
    }

    private function add_oil()
    {

    }

}

$quattro = new Car();
$quattro->prepare();
$quattro->go();