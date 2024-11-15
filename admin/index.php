<?php 
ob_start();
session_start();
?>
<?php $conn= new MySQLi('localhost','root','','otofull');?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <script src="https://cdn.ckeditor.com/4.25.0/standard/ckeditor.js"></script> -->


    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['username'])){
       $username=$_POST['username'];
       $password=$_POST['password']; 
       $query="select * from admin where username='$username' and password ='$password'";
       $result = $conn->query($query);
       if(mysqli_num_rows($result)==0){
        $alert="Sai tên đăng nhập và mật khẩu";
       }else{
        $result = mysqli_fetch_array($result);
        if($result['status']==0){
            $alert="Tài khoản đang bị khóa!";
        }else{
            $_SESSION['admin']=$username;
            header("Refresh:0");
            }
       }
    }
?>
<section>
    <?php 
    if(isset($_SESSION['admin'])){
        include "admincontrolpanel.php";
    }else{
        include "loginadmin.php";
    }
    ?>
</section>
</body>
</html>