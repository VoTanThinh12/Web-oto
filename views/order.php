<head>
    <style>
        /* Center Form Container without Affecting Global Layout */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;

}
        /* Form Styling Specific to giohang.php */
        form.order-form {
            background: #fff;
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            box-sizing: border-box;
            margin : 150px auto;
        }

        /* Unique Heading Styling to Avoid Global Impact */
        form.order-form h1,
        form.order-form h2 {
            text-align: center;
            color: #333;
            margin: 0 0 15px;
        }

        form.order-form h1 {
            font-size: 28px;
        }

        form.order-form h2 {
            font-size: 20px;
            color: #555;
            margin-top: 10px;
        }

        /* Section Styling */
        form.order-form section {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        form.order-form label {
            font-size: 14px;
            color: #555;
            margin-bottom: 6px;
        }

        /* Input, Textarea, and Dropdown Specific to giohang.php */
        form.order-form input[type="text"],
        form.order-form input[type="tel"],
        form.order-form input[type="email"],
        form.order-form textarea,
        form.order-form select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f7f7f7;
            width: 100%;
            outline: none;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }

        form.order-form input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        form.order-form input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<?php
$query = "select * from member where username = '".$_SESSION['member']."'";
$member = mysqli_fetch_array($conn->query($query));


?>
<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $note = $_POST['note'];
    $ordermethodid = $_POST['ordermethodid'];
    $memberid = $member['id'];
    
    $query = "INSERT INTO orders (ordermethodid, memberid, name, address, mobile, email, note)
              VALUES ($ordermethodid, $memberid, '$name', '$address', '$mobile', '$email', '$note')";
    $conn->query($query);

    $orderid = $conn->insert_id; 
    foreach ($_SESSION['cart'] as $key => $value) {
        $carid = $key;
        $number = $value;
        
        $query = "SELECT price FROM new_cars WHERE id = $carid";
        $price = mysqli_fetch_array($conn->query($query))['price'];

        $query = "INSERT INTO orderdetail (carid, orderid, number, price)
                  VALUES ('$carid', '$orderid', '$number', '$price')";
        $conn->query($query);
    }

    unset($_SESSION['cart']);
    echo "<script>alert('Chúc mừng bạn đã mua hàng thành công');</script>";
    echo "<script>location='?option=home';</script>";
    exit();
}
?>



<div class="form-container"> <!-- Thêm thẻ div bao quanh form -->
    <form method="post" class="order-form">
        <h2>Thông tin nhận hàng</h2>
        <section>
            <label>Họ tên: </label><input name="name" value="<?=$member['fullname']?>">
        </section>
        <section>
            <label>Điện thoại: </label><input type="tel" name="mobile" value="<?=$member['mobile']?>">
        </section>
        <section>
            <label>Địa chỉ: </label><textarea name="address" rows="3"><?=$member['address']?></textarea>
        </section>
        <section>
            <label>Email: </label><input type="email" name="email" value="<?=$member['email']?>">
        </section>
        <section>
            <label>Ghi chú: </label><textarea name="note" rows="3"></textarea>
        </section>

        <h2>Chọn phương thức thanh toán</h2>
        <?php
        $query = "select * from ordermethod where status = 1";
        $result = $conn->query($query);
        ?>

        <select name="ordermethodid">
            <?php foreach($result as $item): ?>
                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <section>
            <input type="submit" value="Đặt hàng">
        </section>    

    </form>
</div>

