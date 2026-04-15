<html>
<body>

<h3>Feedback Form</h3>

<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Feedback: <br>
    <textarea name="msg"></textarea><br>

    Rating (1-5):
    <input type="number" name="rate" min="1" max="5"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $rate = $_POST['rate'];

    echo "<h3>Submitted Feedback</h3>";

    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Feedback: $msg <br>";

    echo "Rating: ";

    for($i = 1; $i <= $rate; $i++)
    {
        echo "★ ";
    }
}
?>

</body>
</html>
