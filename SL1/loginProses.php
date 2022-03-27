<?php
    session_start();
    

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username==$_SESSION['username']&&$password==$_SESSION['password1']){
            header("location:home.php");
        }
        else{
            header("location:login.php");  
        }
    }


?>