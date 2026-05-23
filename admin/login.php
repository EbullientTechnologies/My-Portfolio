<?php
session_start();

$username = "admin";
$password = "12345";

if(isset($_POST['login'])){

    if($_POST['username'] == $username && $_POST['password'] == $password){

        $_SESSION['admin'] = true;

        header('Location: dashboard.php');

    }else{
        echo "Invalid Login";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button name="login">Login</button>
</form>
