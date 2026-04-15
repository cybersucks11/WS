<?php
include 'db.php';

pg_query_params($conn,
"UPDATE dairy_products SET product_name=$1,price=$2 WHERE id=$3",
[$_POST['product_name'], $_POST['price'], $_POST['id']]
);

echo "Updated";
?>
