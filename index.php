<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "class/Shape.php";
include_once "class/Circle.php";
include_once "class/Cylinder.php";
include_once "class/Rectangle.php";
include_once "class/Square.php";
$square=new Square('Square1',30,54);
$circle=new Circle('Circle1',5);
$cylinder=new Cylinder('Cylinder1',5,20);
$rectangle=new Rectangle('Rectangle1',20,30);
echo "Area of circle is ".$circle->getArea()."<br>";
echo "Perimeter of circle is ".$circle->getPerimeter()."<br>";
echo "Area of rectangle is ".$rectangle->getArea()."<br>";
echo "Perimeter of rectangle is ".$rectangle->getPerimeter()."<br>";
echo "Area of cylinder is ".$cylinder->getArea()."<br>";
echo "Volum of cylinder is ".$cylinder->getVolum()."<br>";
?>

</body>
</html>
