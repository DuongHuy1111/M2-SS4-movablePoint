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
include('Point.php');
include('MovablePoint.php');

$point = new Point(11, 10);
$point->setXY(9, 6);
$point->toString();

$movable = new MoveablePoint(1, 2, 5, 4);
$movable->setSpeed(2, 4);
$movable->toString();
echo "<br>";
$movable->move();

?>
</body>
</html>