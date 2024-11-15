<head>
    <style>
        body {
            background-color: #f4f4f4; /* Màu nền nhẹ nhàng để tạo cảm giác sang trọng */
        }

        .cart {
            width: 80%; /* Chiều rộng giỏ hàng */
            margin: 200px auto; /* Giữa trang */
            background-color: rgba(255, 255, 255, 0.9); /* Nền trắng trong suốt */
            border-radius: 10px; /* Bo tròn các góc */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho phần giỏ hàng */
            padding: 20px; /* Padding bên trong */
        }

        table {
            width: 100%; /* Đảm bảo bảng chiếm toàn bộ chiều rộng của body */
            border-collapse: collapse; /* Gộp các đường viền lại với nhau */
        }

        th {
            background-color: #343a40; /* Màu nền tối cho tiêu đề bảng */
            color: #ffffff; /* Màu chữ trắng cho tiêu đề bảng */
            padding: 15px; /* Padding cho tiêu đề */
            font-size: 1.2em; /* Kích thước chữ lớn hơn */
        }

        td {
            padding: 10px; /* Khoảng cách bên trong cho các ô */
            border: 1px solid #ccc; /* Đường viền cho các ô */
            text-align: center; /* Căn giữa nội dung */
        }

        td img {
            max-width: 100px; /* Chiều rộng tối đa cho hình ảnh */
            border-radius: 5px; /* Bo tròn các góc cho hình ảnh */
        }
    </style>    
</head>

<?php

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['action'])) {
    $id = isset($_GET['id'])?$_GET['id']:"";
    switch ($_GET['action']) {
        case 'add':
            if (array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id]++;
            } else {
                $_SESSION['cart'][$id] = 1;
            }
            header("Location: ?option=cart");
            exit; // Dừng script ngay sau khi header
        case 'delete':
            unset($_SESSION['cart'][$id]);
            break;
        case 'deleteall':
            unset($_SESSION['cart']);
            break;
        case 'update':
            if($_GET['type']=='asc'){
            $_SESSION['cart'][$id]++;
        }
        // break;
        else {
            if ($_SESSION['cart'][$id] > 1) {
                $_SESSION['cart'][$id]--;
            }
        }
            header("Location: ?option=cart");
            exit; // Dừng script ngay sau khi header
        case 'order':
            if(isset($_SESSION['member'])){
                header("location:?option=order");
            }else{
                header("location:?option=signin&order=1");
            }
            break;
    }

}
?>

<section class="cart">
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $ids = implode(',', array_keys($_SESSION['cart']));
        $query = "SELECT * FROM new_cars WHERE id IN ($ids)";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
    ?>
    
    <table border="1" width="100%" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Number</td>
                    <td>SubTotal</td>
                </tr>
            </thead>
            <tbody>
        <?php
        $total = 0;
        foreach ($result as $item): ?>
                <tr>
                    <td><img src="<?= $item['image'] ?>"></td>
                    <td><?= $item['name'] ?><br><input type="button" value ="xóa" onclick= location='?option=cart&action=delete&id=<?=$item['id']?>'></td> 
                    <td><?=number_format($item['price'], 0, ',', '.') ?> VNĐ</td>
                    <td><?=$_SESSION['cart'][$item['id']]?>
                        <input type="button" value ="+"  onclick= location='?option=cart&action=update&type=asc&id=<?=$item['id']?>'>
                        <input type="button" value ="-"  onclick= location='?option=cart&action=update&type=desc&id=<?=$item['id']?>'>
                    </td>
                    <td><?=number_format($subtotal = $item['price']*$_SESSION['cart'][$item['id']], 0, ',', '.') ?> VNĐ</td>
                </tr>
        <?php $total += $subtotal;?>
        <?php endforeach; ?>
            <tr><td colspan="5">Tổng tiền : <?=number_format($total,0,',','.')?>
            <section>
            <input type="button" value="Xóa ngay còn kịp" onclick="if(confirm('Are you ok?')) location='?option=cart&action=deleteall';";>
            </section>
            <section><input type="button" value ="Đặt hàng"  onclick= location='?option=cart&action=order'></section>
        </td></tr>
            </tbody>
        </table>   
    <?php
        }
    } else {
        // Giao diện khi giỏ hàng trống
        echo "<div style='text-align: center; padding: 20px;'>
                <h3>Giỏ hàng của bạn đang trống!</h3>
                <p>Khám phá thêm sản phẩm và bắt đầu thêm vào giỏ hàng của bạn.</p>
                <a href='index.php' style='text-decoration: none; background-color: #0066cc; color: white; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 10px;'>Xem sản phẩm</a>
              </div>";
    }
    ?>
</section>
