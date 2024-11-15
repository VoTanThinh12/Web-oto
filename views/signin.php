<?php
// session_start();

if(isset($_POST['username']))  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM member WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    if (mysqli_num_rows($result) == 0) {
        $alert="Sai tên đăng nhập và mật khẩu";
    }else{
        $result=mysqli_fetch_array($result);
        if($result['status']==0){
            $alert="Tài khoản của bạn đang bị khóa";
        }else{
            $_SESSION['member']=$username;
            if(isset($_GET['order'])){
                echo"<script>location='?option=order';</script>";
                // header("location:?option=order");
            }else{
                echo"<script>location='?option=home';</script>";

            }
        }
    }
    
    
    
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        .login{
            margin-bottom:10px;
        }

        body {

            /* font-family: Arial, sans-serif; */
            background-color: #f4f4f9;
            margin-top : 40px;
            /* margin-bottom : 50px; */
            /* padding-top: 100px; */
            justify-content: center;
            align-items: flex-start;
            /* min-height: 100vh; */
            box-sizing: border-box;
        }
        .login-container {
            font-family: 'Garamond', serif;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
            margin: auto;
            margin-top : 150px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #d4af37;
        }
        .login-container label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: #555;
            margin-top: 10px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            outline: none;
            border-color: #0066cc;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #d4af37;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container button:hover {
            background-color: #004c99;
        }
    </style>
</head>
<body>
    <section class="login">
        <div class="login-container">
            <h2>Đăng Nhập tài khoản</h2>
            <section><?=isset($alert)?$alert:""?></section>
            <form method="post">
            <section>
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Đăng nhập</button>
                </section>
            </form>
        </div>
    </section>
</body>

