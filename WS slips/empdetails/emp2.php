<?php
session_start();

$_SESSION['eno'] = $_POST['eno'];
$_SESSION['ename'] = $_POST['ename'];
$_SESSION['address'] = $_POST['address'];
?>

<form method="post" action="emp3.php">
    Basic: <input type="text" name="basic"><br>
    DA: <input type="text" name="da"><br>
    HRA: <input type="text" name="hra"><br>
    <input type="submit" value="Show Result">
</form>
