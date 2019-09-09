<?php



class Rectangle extends Shape
{
protected $width;
protected $height;
function __construct($name,$width,$height)
{
    parent::__construct($name);
    $this->width=$width;
    $this->height=$height;
}
function getArea(){
    return $this->width*$this->height;
}
function getPerimeter(){
    return ($this->width+$this->height)*2;
}
}