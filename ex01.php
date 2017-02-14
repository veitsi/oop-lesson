<?php

echo "hello, oop!";

class Goods
{
    var $price;
    var $enabled;
}

class Tshirt extends Goods
{
    public function __construct($size, $color)
    {
        $this->size=$size;
        $this->color=$color;
    }
    public function show()
    {
        echo "I am a T-shirt with size ".$this->size;
    }
}

$wt1=new Tshirt("L","red");
echo $wt1->color,"\n";
$wt1->show();
