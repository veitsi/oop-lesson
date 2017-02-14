<?php

class Goods
{
    var $price;
    var $enabled;
    public function deliver(){}
}

class Ticket extends Goods
{
    public function deliver()
    {
        echo 'thanks, you will get ticket code as sms';
        //some code to work with sms
    }
}

class Piano extends Goods
{
    public function deliver()
    {
        echo 'thanks, you have to be tomorrow at home from 17:00';
        //some code to call special people
    }
}

$p1=new Piano();
$p1->deliver();

