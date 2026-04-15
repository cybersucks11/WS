<?php
include 'db.php';

pg_query_params($conn,
"INSERT INTO dairy_products(product_name,price) VALUES($1,$2)",
[$_POST['product_name'], $_POST['price']]
);

echo "Added";
?>
