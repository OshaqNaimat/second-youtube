<?php 
session_start();
include './config.php';
$email = $_POST['email'];
$pass = $_POST['password'];

$checkUser = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($connection,$checkUser);

if(mysqli_num_rows($result) > 0){
    // user is present
    foreach($result as $item){
        $_SESSION['ticket'] = $item['Name'];
        $_SESSION['user_id'] = $item['id'];
    }
    header("Location: http://localhost:3000/index.php");
}else{
    // user is not present
    $_SESSION['invalid'] = 'Invalid data';
    header("Location: http://localhost:3000/login-form.php");
}

?>