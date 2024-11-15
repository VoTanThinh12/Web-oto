 <?php
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $query="select * from member where username = '$username'";
        $result=$conn->query($query);
        if(mysqli_num_rows($result)!=0){
            $alert="Tên đăng nhập đã được sử dụng";
        }else{
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $query = "insert member(username,password,fullname,mobile,address,email) 
            values('$username','$password','$fullname','$mobile','$address','$email')";
            $conn->query($query);
            echo"<script>alert('Bạn đã đăng kí thành công');location='?option=signin';</script>";
        }

    }
?>
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        
    body {
        /* font-family: 'Georgia', serif;
        background-color: #e5e5e5;
        background-image: linear-gradient(135deg, #e8e8e8 25%, #ffffff 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        color: #444; */
        margin-top: 140px;


    .login{
        display: flex; 
        justify-content: center;
        align-items: center;
        margin-top:16px;
    }    
    }
    .login-container {
        
    
        width: 100%;
        max-width: 500px;
        padding: 40px;
        background: #fafafa;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        border-radius: 16px;
        text-align: center;
        /* border: 2px solid #d4af37; Màu vàng kim loại */
    }
    .login-container h2 {
        color: #d4af37;
        margin-bottom: 25px;
        font-size: 26px;
        font-weight: 700;
        font-family: 'Garamond', serif;
    }
    .login-container label {
        display: block;
        text-align: left;
        font-weight: bold;
        color: #555;
        margin: 12px 0 6px;
        font-size: 16px;
    }
    .login-container input[type="text"],
    .login-container input[type="password"],
    .login-container input[type="tel"],
    .login-container input[type="email"],
    .login-container textarea {
        width: 100%;
        padding: 14px;
        margin-top: 5px;
        border: 1px solid #bbb;
        border-radius: 10px;
        font-size: 16px;
        color: #444;
        background: #f7f7f7;
        box-sizing: border-box;
        transition: all 0.3s;
    }
    .login-container input:focus,
    .login-container textarea:focus {
        outline: none;
        border-color: #d4af37;
        box-shadow: 0 0 8px rgba(212, 175, 55, 0.5);
    }
    .login-container button {
        width: 100%;
        padding: 16px;
        margin-top: 25px;
        background-color: #d4af37;
        color: #fff;
        font-size: 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-weight: bold;
        font-family: 'Garamond', serif;
    }
    .login-container button:hover {
        background-color: #b5972d;
    }
    .login-container section.alert {
        color: #c9302c;
        font-size: 14px;
        margin-bottom: 15px;
    }
</style>

    <!-- <style>
        body {
            /* font-family: Arial, sans-serif; */
            background-color: #f4f4f9;
            margin-top : 50px;
            padding-top: 100px;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .login-container {
            font-family: Arial, sans-serif;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
            margin: auto;
            margin-top : 20px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
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
            background-color: #0066cc;
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
    </style> -->
<body>
    <section class="login">
        <div class="login-container">
            <h2>Đăng kí tài khoản</h2>
            <section><?=isset($alert)?$alert:"";?></section>
            <form method="post" onsubmit="if(repassword.value!=password.value)
                {
                    alert('Xác nhận mật khẩu không trùng khóp');
                    return false;
                }">
            <section>
                <label>Tên đăng nhập</label>
                <input type="text" name="username" required>
            </section>

            <section>
                <label>Nhập Mật Khẩu</label>
                <input type="password" name="password" required>
            </section>

            <section>
                <label>Nhập lại mật Khẩu</label>
                <input type="password" name="repassword" required>
            </section>

            <section>
                <label>Tên đầy đủ</label>
                <input type="text" name="fullname" required>
            </section>
            
            <section>
                <label>Số điện thoại</label>
                <input type="tel" name="mobile" pattern="(0|\+84)\d{9}">
            </section>
            
            <section>
                <label>Địa chỉ</label>
                <textarea name="address" ></textarea>
            </section>
        
            <section>
                <label>Email</label>
                <input type="email" name="email">
            </section>

                <section>
                <button type="submit">Đăng Kí</button>
                </section>
            </form>
        </div>
    </section>
</body>
 