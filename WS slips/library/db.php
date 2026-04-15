<?php
$conn = pg_connect("host=localhost dbname=test user=postgres password=postgres");

if (!$conn) {
    die("Database connection failed");
}
?>


/*
CREATE TABLE books (
    id SERIAL PRIMARY KEY,
    title VARCHAR(150),
    author VARCHAR(100),
    genre VARCHAR(50),
    price NUMERIC(10,2)
);
*/
