<html>
<body>

<form method="post">
    Book No: <input type="text" name="bno"><br>
    Book Name: <input type="text" name="bname"><br>
    Price: <input type="text" name="price"><br><br>

    <input type="submit" name="submit" value="Insert">
</form>

<?php
if(isset($_POST['submit']))
{
    $bno = $_POST['bno'];
    $bname = $_POST['bname'];
    $price = $_POST['price'];

    /* ================================
       🔵 MYSQL CONNECTION (default)
       ================================ */
    // $conn = mysqli_connect("localhost","root","","test");
    // $sql = "INSERT INTO book VALUES('$bno','$bname','$price')";
    // mysqli_query($conn,$sql);


    /* ================================
       🟣 POSTGRESQL CONNECTION (psql)
       ================================ */
    $conn = pg_connect("host=localhost dbname=test user=postgres password=postgres");

    $sql = "INSERT INTO book VALUES($1,$2,$3)";
    $result = pg_query_params($conn, $sql, array($bno, $bname, $price));


    if($result)
        echo "Record Inserted Successfully";
    else
        echo "Error in insertion";
        
       
}
?>


/*CREATE TABLE book (
    bno INT,
    bname VARCHAR(50),
    price INT
);*/

</body>
</html>
