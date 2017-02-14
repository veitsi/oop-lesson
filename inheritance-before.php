<?php
class Juice
{
    var $price;
    var $volume=0.5;
}

class Milk
{
    var $price;
    var $volume=0.5;
}
$tomato=new Juice();
echo $tomato->volume;
$mleko=new Milk();
echo $mleko->volume;

