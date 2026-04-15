<?php
include "db.php";

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

// check password match
if($pass == $cpass){

    // encrypt password
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    // insert
    pg_query_params($conn,
    "INSERT INTO users(name,contact,email,password) VALUES($1,$2,$3,$4)",
    [$name,$contact,$email,$hash]);

    echo "Registered Successfully";

}else{
    echo "Password not matched";
}
?>
