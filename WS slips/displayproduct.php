<html>
<body>

<form method="post">
    <h3>Product List</h3>

    Books (Price 100) Qty:
    <input type="text" name="book"><br>

    Pens (Price 10) Qty:
    <input type="text" name="pen"><br>

    Bags (Price 500) Qty:
    <input type="text" name="bag"><br><br>

    <input type="submit" name="submit" value="Calculate Bill">
</form>

<?php
if(isset($_POST['submit']))
{
    $book = $_POST['book'];
    $pen  = $_POST['pen'];
    $bag  = $_POST['bag'];

    $book_price = 100;
    $pen_price  = 10;
    $bag_price  = 500;

    $total_qty = $book + $pen + $bag;

    $total_cost =
        ($book * $book_price) +
        ($pen * $pen_price) +
        ($bag * $bag_price);

    echo "<h3>Bill Details</h3>";

    echo "Books Qty: $book (Price 100)<br>";
    echo "Pens Qty: $pen (Price 10)<br>";
    echo "Bags Qty: $bag (Price 500)<br><br>";

    echo "Total Quantity: $total_qty <br>";
    echo "Total Cost: $total_cost <br>";
}
?>

</body>
</html>
