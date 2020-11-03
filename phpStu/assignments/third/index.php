<?php
include 'Computer.php';
include 'Triangle.php';

$acer = new Computer('宏碁',16,1,4.2,6999,27);
$asus = new Computer('华硕',32,3,4.5,12999,32);
$dell = new Computer('戴尔',8,1,2.2,2999,15.6);
$hasee = new Computer('神舟',32,3,4.5,7999,17.3);

$asus->infos();
$asus->infos();
$dell->infos();
$hasee->infos();

$totalPrice = $acer->getPrice() + $asus->getPrice() + $dell->getPrice() + $hasee->getPrice();
echo '<br/>' . '总价' . $totalPrice;


echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
$triangle1 = new Triangle(3,5,3);
$triangle2 = new Triangle(6,5,6);
echo '三角形1的面积：' . $triangle1->getArea();echo '<br>';
echo '三角形2的面积：' . $triangle2->getArea();echo '<br>';
echo '三角形1的周长：' . $triangle1->getPerimeter();echo '<br>';
echo '三角形2的周长：' . $triangle2->getPerimeter();