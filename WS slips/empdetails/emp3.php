<?php
session_start();

$eno = $_SESSION['eno'];
$ename = $_SESSION['ename'];
$address = $_SESSION['address'];

$basic = $_POST['basic'];
$da = $_POST['da'];
$hra = $_POST['hra'];

$total = $basic + $da + $hra;

echo "Eno: $eno <br>";
echo "Ename: $ename <br>";
echo "Address: $address <br>";
echo "Basic: $basic <br>";
echo "DA: $da <br>";
echo "HRA: $hra <br>";
echo "Total: $total <br>";
?>
