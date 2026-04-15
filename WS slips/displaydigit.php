<html>
<body>

<form method="post">
    Enter Number: <input type="text" name="num"><br>
    <input type="submit" name="submit" value="Show in Words">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    $words = [
        0 => "Zero",
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine"
    ];

    echo "Number in words: <br>";

    for($i = 0; $i < strlen($num); $i++)
    {
        $digit = $num[$i];
        echo $words[$digit] . " ";
    }
}
?>

</body>
</html>
