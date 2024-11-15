<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản Hồi</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #ff5722;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .feedback-form {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            margin: 160px auto;

            /* margin-top: 120px;    */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto 0;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
        }

        .success-message {
            text-align: center;
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="feedback-form">
        <h2>Gửi Phản Hồi</h2> <!-- Di chuyển tiêu đề vào bên trong form -->

        <form action="" method="post">
            <div class="form-group">
                <label for="name">Tên của bạn:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email của bạn:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Nội dung phản hồi:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <input type="submit" value="Gửi Phản Hồi">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']); 
            if ($conn->connect_error) {
                die("Kết nối không thành công: " . $conn->connect_error);
            }
            $query = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($conn->query($query) === TRUE) {
                echo "<div class='success-message'>Cảm ơn bạn, $name! Phản hồi của bạn đã được gửi thành công.</div>";
            } else {
                echo "Lỗi: " . $query . "<br>" . $conn->error;
            }
            $conn->close();
        }
        ?>
    </div>

</body>
</html>
