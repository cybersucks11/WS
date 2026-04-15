<?php
$conn = pg_connect("host=localhost dbname=dairy_db user=postgres password=postgres");

if(!$conn){
    die("DB connection failed");
}
?>






/*CREATE TABLE dairy_products(
id SERIAL PRIMARY KEY,
product_name VARCHAR(100),
price NUMERIC(10,2)
);

ALTER USER postgres WITH PASSWORD 'postgres'

*/
