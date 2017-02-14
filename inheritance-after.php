<?php


class Goods
{
    var $price;
    var $volume=0.5;
}

class Juice extends Goods
{

}

class Milk extends Goods
{

}

$tomato=new Juice();
echo $tomato->volume;
$mleko=new Milk();
echo $mleko->volume;
