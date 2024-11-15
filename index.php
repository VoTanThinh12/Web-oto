<?php 
ob_start();
session_start();
?>
<?php $conn= new MySQLi('localhost','root','','otofull');?>



<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Bán Ô Tô</title>  
    <!-- <link rel="stylesheet" href="css/index.css"> -->
     <style>
        body {
        margin: 0; /* Xóa margin của body */
        padding: 0; /* Xóa padding của body */
        background-image: url("https://www.aozoom.com.vn/storage/uploads/content/images/Hinh-nen-o-to-trang-den-day-nghe-thuat.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        box-sizing: border-box;
        z-index: 1; /* Đặt lớp phủ lên trên ảnh nền */
        }

        header {
        margin-bottom: 140px;
        display: flex;
        align-items: center; /* Căn giữa theo chiều dọc */
        justify-content: space-between; /* Giãn cách đều giữa các phần tử */
        padding: 40px 0px; /* Giữ padding trên và dưới cho header */
        color: white;
        background-color: black;
        position: fixed; /* Giữ header cố định */
        top: 0; /* Đặt ở vị trí trên cùng */
        width: 100%; /* Chiếm toàn bộ chiều rộng */
        z-index: 1000; /* Đặt z-index cao hơn để đảm bảo header không bị che khuất */
        }

        header h1 {
        margin: 0; /* Xóa margin cho tiêu đề */
        font-size: 30px; /* Tăng kích thước chữ cho tiêu đề */
        display: inline-block; /* Đảm bảo tiêu đề nằm cùng hàng với logo */
        }

        header img {
        height: 60px; /* Tăng kích thước logo */
        width: 60px;
        margin-left: 50px; /* Thêm margin bên trái để di chuyển logo sang phải */
        margin-right: 20px; /* Khoảng cách giữa logo và tiêu đề */
        }

        header nav {
        display: flex;
        /* Sử dụng flexbox để căn giữa và giãn cách các liên kết */
        margin-left: auto; /* Đẩy nav sang bên phải */
        justify-content: space-between;
        padding: 10px;
        }

        header nav a {
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
        color: white; /* Đặt màu chữ trắng cho các liên kết trong nav */
        text-decoration: none; /* Xóa gạch chân */
        padding: 10px 15px; /* Padding cho các liên kết (giãn cách rộng hơn)   */
        transition: color 0.3s; /* Hiệu ứng chuyển màu khi hover */
        font-size: 21px; /* Tăng kích thước chữ cho các liên kết */
        }

        header nav a:hover {
        color: #f0f0f0; /* Màu chữ khi hover */
        }

        .search-container {
        display: flex;
        align-items: center;
        margin-left: 20px; /* Thêm khoảng cách bên trái cho search-container */
        }

        .search-box {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 17px; /* Tăng kích thước chữ cho thanh tìm kiếm */
        margin-right: 0; /* Không có khoảng cách bên phải */
        }

        .search-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        margin-left: -50px; /* Điều chỉnh giá trị này để di chuyển hơn nữa sang trái nếu cần */
        display: flex; /* Đảm bảo hình ảnh kính lúp cũng là một phần tử flex */
        }

        .search-button img {
        width: 39px; /* Kích thước của biểu tượng kính lúp */
        height: 39px; /* Kích thước của biểu tượng kính lúp */
        }

        .social-media {
        margin-top: 10px; /* Khoảng cách giữa thông tin liên hệ và logo mạng xã hội */
        }

        .social-media img {
        width: 30px;
        height: 30px;
        margin: 0 5px;
        }
        .left {
            position: fixed; /* Giữ vị trí cố định cho phần bên trái */
            top: 140px; /* Cách từ đỉnh xuống để không bị che khuất bởi header */
            left: 0; /* Đặt phần bên trái ở vị trí 0 */
            width: 15%; /* Chiều rộng cố định cho phần bên trái */
            height: calc(100% - 140px); 
            /* overflow-y: hidden; */
            border-radius: 10px; /* Bo tròn các góc */
            /* margin-top : 40px; */
            

        }

        .center{
            margin-left: 15%; /* Căn giữa giữa hai phần bên trái và bên phải */
            margin-right: 15%; /* Căn giữa giữa hai phần bên trái và bên phải */
            width: 70%; /* Chiều rộng phần giữa */
            /* Có thể thêm các thuộc tính khác nếu cần */
    
        }

        .right {
            position: fixed; /* Giữ vị trí cố định cho phần bên phải */
            top: 140px; /* Cách từ đỉnh xuống để không bị che khuất bởi header */
            right: 0; /* Đặt phần bên phải ở vị trí 0 */
            width: 15%; /* Chiều rộng cố định cho phần bên phải */
            height: calc(100% - 140px); 
            overflow-y: auto; /* Thêm thanh cuộn nếu nội dung quá dài */
            border-radius: 10px; /* Bo tròn các góc */
            /* margin-top : 40px; */
            
        }


        .body {
        display: flex;
        justify-content: space-between; /* Giãn cách đều giữa các phần tử */
        align-items: flex-start; /* Căn đầu các phần tử lên trên */

        }
        /* CSS cho Footer */
        .footer {
        /* display: flex; */
        /* justify-content: center; */
        text-align: center;
        padding: 20px;
        color: white;
        }
     </style>
</head>  
<body>  
<section class="wrapper">  
    <div class="header">
        <header>  
            <?php include"views/layout/header.php"?>
        </header>
        </div>

        <section class="body">   
    <div class="left">
        <aside>
            <?php include "views/layout/left.php" ?>
        </aside>  
    </div>

    <div class="center">
        <article>  
            <?php include "views/layout/article.php" ?>
        </article>
    </div>

    <div class="right">
        <aside>
            <?php include "views/layout/right.php" ?>
        </aside> 
    </div>
</section>
        <section  class="footer">
        <footer>  
            <?php include"views/layout/footer.php"?>
        </footer>
        </section>

    </section>
</body>  
</html>
