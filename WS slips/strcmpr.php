<html>
<body>

<form method="post">
    String 1: <input type="text" name="s1"><br>
    String 2: <input type="text" name="s2"><br><br>

    <input type="radio" name="op" value="compare"> Compare Strings<br>
    <input type="radio" name="op" value="upper"> Uppercase<br>
    <input type="radio" name="op" value="lower"> Lowercase<br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $op = $_POST['op'];

    if($op == "compare")
    {
        if($s1 == $s2)
            echo "Strings are Equal";
        else
            echo "Strings are Not Equal";
    }

    else if($op == "upper")
    {
        echo "String 1 Uppercase: " . strtoupper($s1) . "<br>";
        echo "String 2 Uppercase: " . strtoupper($s2);
    }

    else if($op == "lower")
    {
        echo "String 1 Lowercase: " . strtolower($s1) . "<br>";
        echo "String 2 Lowercase: " . strtolower($s2);
    }
}
?>

</body>
</html>

