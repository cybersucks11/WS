<?php
session_start();

// set correct credentials
$correct_user = "admin";
$correct_pass = "123";

// initialize attempts
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}

// check form submit
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == $correct_user && $pass == $correct_pass){
        echo "<h2>Welcome Message</h2>";
        session_destroy();
        exit();
    } else {
        $_SESSION['count']++;
        echo "Invalid Login. Attempts: ".$_SESSION['count']."<br>";
    }
}

// check limit
if($_SESSION['count'] >= 3){
    echo "Maximum attempts reached!";
    session_destroy();
    exit();
}
?>

<!-- Login Form -->
<form method="POST">
Username: <input type="text" name="user"><br><br>
Password: <input type="password" name="pass"><br><br>
<button name="login">Login</button>
</form>
