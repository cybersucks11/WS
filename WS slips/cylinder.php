<html>
<body>

<form method="post">
    Radius: <input type="text" name="r"><br>
    Height: <input type="text" name="h"><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    function cylinder($r, $h)
    {
        $pi = 3.14;
        $volume = $pi * $r * $r * $h;
        $area = 2 * $pi * $r * ($r + $h);

        echo "Volume: " . $volume . "<br>";
        echo "Surface Area: " . $area;
    }

    cylinder($_POST['r'], $_POST['h']);
}
?>

</body>
</html>
