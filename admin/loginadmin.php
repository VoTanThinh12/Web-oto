<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
}

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

.login-container h1 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.alert {
    color: red;
    margin-bottom: 15px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color: #8f94fb;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background-color: #4e54c8;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

button:hover {
    background-color: #8f94fb;
}




</style>
<body>
    <div class="login-container">
        <h1>Đăng nhập Admin</h1>
        <section class="alert">
            <?= isset($alert) ? $alert : "" ?>
        </section>
        <form method="post">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>
