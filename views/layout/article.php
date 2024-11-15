<?php  
    if(isset($_GET['option'])) {  
        switch($_GET['option']){  

            case 'feedback':
                include "views/phanhoi.php";
                break;
            case 'ordersuccess':
                include "views/ordersuccess.php";
                break;
            case 'order':
                include "views/order.php";
                break;
            case 'cart':
                include "views/cart.php";
                break;
            case 'showcar':
                include "views/showcar.php";
                break;
            case 'cardetail':
                include "views/cardetail.php";
                break;
            case 'home':  
                include "views/home.php";  
                break;  
            case 'news':
                include "views/tintuc.php";  
                break;  
            case 'register':  
                include "views/register.php";  
                break;  
            case 'signin':  
                include "views/signin.php";  
                break;
            case 'logout':  
                unset($_SESSION['member']);  
                echo"<script>location='?option=home';</script>";
                break;  
        }  
    } else{
        include "views/home.php";  
    }
?>