<?php


class Circle extends Shape
{
protected $radius;
function __construct($name,$radius)
{
    parent::__construct($name);
    $this->radius=$radius;
}
function getArea(){
    return (pi()*pow($this->radius,2));
}
function getPerimeter(){
    return pi()*$this->radius*2;
}
}