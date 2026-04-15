<html>
<body>

<form method="post">
    Enter Number: <input type="text" name="num"><br>
    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php
if(isset($_POST['submit']))
{
    function factorial($n)
    {
        $fact = 1;
        for($i = 1; $i <= $n; $i++)
        {
            $fact = $fact * $i;
        }
        return $fact;
    }

    $num = $_POST['num'];

    echo "Factorial of $num is: " . factorial($num);
}
?>

</body>
</html>
