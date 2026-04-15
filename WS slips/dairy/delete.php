<?php
include 'db.php';

pg_query_params($conn,
"DELETE FROM dairy_products WHERE id=$1",
[$_POST['id']]
);

echo "Deleted";
?>
